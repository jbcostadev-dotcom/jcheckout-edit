<?php
$host = "165.154.213.177";
$dbname = "correioscpf";
$username = "user";
$password = "Zreel123!";

// Conectar ao banco de dados
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// Obter todas as categorias únicas para exibição no select
$categorias = [];
try {
    $stmt = $pdo->query("SELECT DISTINCT categoria FROM lead_cadastro WHERE categoria IS NOT NULL");
    $categorias = $stmt->fetchAll(PDO::FETCH_COLUMN);
} catch (PDOException $e) {
    echo "Erro ao buscar categorias: " . $e->getMessage();
}

// Excluir registros com base na categoria selecionada
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['categoria'])) {
    $categoria = $_POST['categoria'];

    try {
        $stmt = $pdo->prepare("DELETE FROM lead_cadastro WHERE categoria = :categoria");
        $stmt->execute([':categoria' => $categoria]);
        echo "<p>Leads da categoria '$categoria' foram excluídos com sucesso!</p>";
    } catch (PDOException $e) {
        echo "<p>Erro ao excluir leads: " . $e->getMessage() . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Excluir Leads por Categoria</title>
</head>
<body>
    <h2>Excluir Leads por Categoria</h2>

    <form method="post" action="">
        <label for="categoria">Selecione a Categoria para Exclusão:</label>
        <select name="categoria" id="categoria" required>
            <option value="">Selecione uma categoria</option>
            <?php foreach ($categorias as $cat): ?>
                <option value="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <button type="submit">Excluir Leads</button>
    </form>
</body>
</html>