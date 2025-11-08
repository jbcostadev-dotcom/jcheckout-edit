<?php
// Configurações do banco de dados
$host = '165.154.213.177';
$dbname = 'correioscpf';
$username = 'user';
$password = '';

// Conexão com o banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}

// Função para exportar CSV com dados completos (celular, nome, cep, produtos)
function exportCSV($data, $headers, $filename) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=' . $filename);
    
    $output = fopen('php://output', 'w');
    fputcsv($output, $headers);
    
    foreach ($data as $row) {
        fputcsv($output, $row);
    }
    fclose($output);
}

// Exportação de dados filtrados por categoria
if (isset($_POST['categoria'])) {
    $categoria = $_POST['categoria'];
    $stmt = $pdo->prepare("SELECT celular, nome, cep, produtos FROM lead_cadastro WHERE categoria = :categoria");
    $stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR);
    $stmt->execute();
    
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($data)) {
        exportCSV($data, ['Celular', 'Nome', 'CEP', 'Produtos'], 'dados_exportados.csv');
        exit;
    } else {
        echo "Nenhum dado encontrado para a categoria selecionada.";
    }
}

// Exportação de contatos (somente Nome e Celular)
if (isset($_POST['export_contatos'])) {
    $stmt = $pdo->query("SELECT nome, celular FROM lead_cadastro");
    
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($data)) {
        exportCSV($data, ['Nome', 'Celular'], 'contatos_exportados.csv');
        exit;
    } else {
        echo "Nenhum contato encontrado.";
    }
}

// Obter as categorias disponíveis para o dropdown
$categorias = $pdo->query("SELECT DISTINCT categoria FROM lead_cadastro")->fetchAll(PDO::FETCH_COLUMN);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exportar Dados</title>
</head>
<body>
    <h1>Exportar Dados por Categoria</h1>

    <!-- Formulário para exportar dados filtrados por categoria -->
    <form method="POST" action="">
        <label for="categoria">Selecione a Categoria:</label>
        <select name="categoria" id="categoria" required>
            <option value="">-- Selecione --</option>
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Exportar</button>
    </form>

    <!-- Formulário para exportar apenas Nome e Celular -->
    <form method="POST" action="" style="margin-top: 20px;">
        <button type="submit" name="export_contatos">Exportar Contatos</button>
    </form>
</body>
</html>