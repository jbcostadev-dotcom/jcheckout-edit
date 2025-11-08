<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebendo os dados
    $lista = $_POST['lista'];
    $template = $_POST['template'];

    // Separando os dados da lista e dos templates
    $linhas = array_filter(array_map('trim', explode("\n", $lista))); // Remove linhas vazias e espaços extras
    $templates = array_filter(array_map('trim', explode("|", $template))); // Cada template deve ser separado por "|"

    $resultados = [];
    $totalTemplates = count($templates);  // Conta quantos templates existem

    if ($totalTemplates === 0) {
        echo "Erro: Nenhum template fornecido.";
        exit;
    }

    // Processando cada linha da lista
    foreach ($linhas as $index => $linha) {
        // Verifica e separa os dados da linha (celular, nome, cep, produto, link)
        $dados = array_map('trim', explode(",", $linha));

        // Verifica se há todos os campos necessários antes de continuar
        if (count($dados) < 5) {
            echo "Erro: A linha \"$linha\" não contém todos os campos esperados (celular, nome, cep, produto, link).<br>";
            continue;
        }

        list($celular, $nome, $cep, $produto, $link) = $dados;

        // Seleciona o template correspondente (usar índice circular)
        $templateSelecionado = $templates[$index % $totalTemplates];

        // Substitui os placeholders no template com os dados
        $mensagem = str_replace(
            ['[CELULAR]', '[NOME]', '[CEP]', '[PRODUTO]', '[LINK]'],
            [$celular, $nome, $cep, $produto, $link],
            $templateSelecionado
        );

        // Adicionar o resultado processado
        $resultados[] = "$mensagem";
    }

    // Exibir as mensagens processadas
    echo "<h2>Mensagens Processadas</h2>";
    echo "<pre>";
    foreach ($resultados as $resultado) {
        echo $resultado . "\n";
    }
    echo "</pre>";
} else {
    echo "Método de requisição inválido.";
}
?>