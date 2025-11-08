
<?php
// Configurações do banco de dados
$host = '165.154.213.177';
$dbname = 'correioscpf';
$username = 'user';
$password = 'Zreel123!';

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
        exportCSV($data, ['First Name', 'Phone'], 'contatos_exportados.csv');
        exit;
    } else {
        echo "Nenhum contato encontrado.";
    }
}

// Obter as categorias disponíveis para o dropdown
$categorias = $pdo->query("SELECT DISTINCT categoria FROM lead_cadastro")->fetchAll(PDO::FETCH_COLUMN);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .dashboard-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            justify-content: center;
        }
        .card {
            background-color: #2b2b2b;
            border-radius: 8px;
            padding: 20px;
            width: 700px;
            text-align: left;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            overflow: hidden;
        }
        .card h3 {
            margin: 0 0 10px;
        }
        .card p {
            margin: 0 0 15px;
            color: #a5a5a5;
        }
        .card .icon {
            font-size: 24px;
            margin-bottom: 10px;
            color: #2196f3;
        }
        .novo {
            color: #00ff00;
            font-weight: bold;
        }
        .search-bar {
            margin: 20px auto;
            text-align: center;
        }
        .search-bar input {
            padding: 10px;
            width: 300px;
            border-radius: 8px;
            border: none;
            outline: none;
        }
        .card-content {
            display: none;
            background-color: #333;
            padding: 15px;
            margin-top: 10px;
            border-radius: 8px;
            color: #d3d3d3;
            max-height: 200px;
            overflow-y: auto;
        }
    </style>
    <script>
        function toggleContent(event, cardId) {
            // Impede que a ação seja executada se o clique for em um elemento dentro de card-content
            if (event.target.closest('.card-content')) return;

            var content = document.getElementById(cardId);
            content.style.display = content.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</head>
<body>

    <div class="search-bar">
        <input type="text" placeholder="Search...">
    </div>

    <div class="dashboard-container">
        <div class="card" onclick="toggleContent(event, 'content-system')">
            <h3>Adicionar Leads - CSV</h3>
            <p>Editar as configurações do bot</p>
            <div class="icon">⚙️</div>
            <div id="content-system" class="card-content">
                <h2>Upload de Arquivo CSV</h2>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <label for="file">Escolha o arquivo CSV:</label>
                    <input type="file" name="file" id="file" required>
                    <br><br>
                    <button type="submit" name="upload">Upload</button>
                </form>
                <?php
                // Exibir os campos de mapeamento após o upload
                if (isset($_GET['columns'])) {
                    $columns = explode(",", $_GET['columns']);
                    
                    // Mapeamento padrão para cada coluna do banco de dados com base no CSV
                    $default_mapping = [
                        'cpf' => 'Documento',
                        'nome' => 'Nome do Cliente',
                        'CEP' => 'Cep',
                        'cidade' => 'Cidade',
                        'estado' => 'Estado',
                        'rua' => 'Endereço',
                        'numero' => 'Número',
                        'data_compra' => 'Data Final do Pagamento',
                        'produto_preco' => 'Preço do Plano',
                        'bairro' => 'Bairro',
                        'celular' => 'Telefone do Cliente',
                        'produtos' => 'Plano'
                    ];
                    
                    // Colunas do banco de dados
                    $db_columns = array_keys($default_mapping);
                    
                    echo '<form action="upload.php" method="post">';
                    echo '<input type="hidden" name="filename" value="' . $_GET['filename'] . '">';
                    
                    // Gerar selects com pré-seleção
                    foreach ($db_columns as $db_column) {
                        echo '<label for="' . $db_column . '">' . ucfirst($db_column) . ':</label>';
                        echo '<select name="mapping[' . $db_column . ']" required>';
                        
                        foreach ($columns as $index => $column) {
                            // Verifica se a coluna do CSV corresponde à coluna padrão definida
                            $selected = ($column == $default_mapping[$db_column]) ? 'selected' : '';
                            echo '<option value="' . $index . '" ' . $selected . '>' . htmlspecialchars($column) . '</option>';
                        }
                        
                        echo '</select><br><br>';
                    }
                    
                    // Campos adicionais
                    echo '<h3>Campos adicionais</h3>';
                    echo '<label for="link_checkout">Link de Checkout:</label>';
                    echo '<input type="text" name="link_checkout" required><br><br>';
                    
                    echo '<label for="categoria">Categoria:</label>';
                    echo '<input type="text" name="categoria" required><br><br>';
                    
                    echo '<label for="taxa_preco">Taxa Preço:</label>';
                    echo '<input type="number" name="taxa_preco" step="0.01" required><br><br>';
                    
                    echo '<button type="submit" name="import">Importar Dados</button>';
                    echo '</form>';
                }
                ?>



            </div>
        </div>

        <div class="card" onclick="toggleContent(event, 'content-online')">
            <h3>Deletar Leads</h3>
            <p>Deletar Leads, Atualizar link do Checkout, Entre outros</p>
            <div class="icon">🔵</div>
            <div id="content-online" class="card-content">
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

            </div>
        </div>

        <div class="card" onclick="toggleContent(event, 'content-users')">
            <h3>Criar CSV</h3>
            <p>Download no formato do template e contato Google</p>
            <div class="icon">⚙️</div>
            <div id="content-users" class="card-content">
            <h1>Exportar Dados por Categoria</h1>
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

            </div>
        </div>

        <div class="card" onclick="toggleContent(event, 'content-users-off')">
            <h3>Criar Template</h3>
            <p>Ver os usuários off do bot!</p>
            <div class="icon">⚙️</div>
            <div id="content-users-off" class="card-content">
            <h2>Envie sua lista e template</h2>
    <form action="process.php" method="POST">
        <label for="lista">Lista (formato: celular,nome,cep,produto,link):</label><br>
        <textarea name="lista" id="lista" rows="10" cols="50"></textarea><br><br>
        
        <label for="template">Templates:</label><br>
        <textarea name="template" id="template" rows="10" cols="50"></textarea><br><br>
        
        <button type="submit">Processar</button>
    </form>
            </div>
        </div>

        <div class="card" onclick="toggleContent(event, 'content-checkers')">
            <h3>Checkers <span class="novo">NOVO</span></h3>
            <p>Edita as configurações dos checkers</p>
            <div class="icon">✏️</div>
            <div id="content-checkers" class="card-content">
                Configure as opções de verificação, como a frequência e a precisão das verificações de segurança e desempenho.
            </div>
        </div>

        <div class="card" onclick="toggleContent(event, 'content-refund')">
            <h3>Reembolso <span class="novo">NOVO</span></h3>
            <p>Clique para configurar o reembolso</p>
            <div class="icon">✏️</div>
            <div id="content-refund" class="card-content">
                Nesta área, você pode configurar as políticas e o processo de reembolso para transações realizadas.
            </div>
        </div>

        <div class="card" onclick="toggleContent(event, 'content-add-cards')">
            <h3>Adiciona cartões</h3>
            <p>Adiciona novas cc's</p>
            <div class="icon">⬆️</div>
            <div id="content-add-cards" class="card-content">
                Permite adicionar novos cartões de crédito ao sistema para diferentes funcionalidades de teste.
            </div>
        </div>

        <div class="card" onclick="toggleContent(event, 'content-add-logins')">
            <h3>Adiciona logins</h3>
            <p>Add logins</p>
            <div class="icon">⬆️</div>
            <div id="content-add-logins" class="card-content">
                Use esta opção para adicionar logins adicionais ao sistema, expandindo o acesso a novas contas.
            </div>
        </div>
    </div>

</body>
</html>
