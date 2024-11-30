<?php

// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "Zreel123!";
$dbname = "vegacheckout_db";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtém os dados JSON enviados para o webhook
$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    // Prepara a inserção na tabela `transactions`
    $stmt_transaction = $conn->prepare("INSERT INTO transactions (transaction_id, store_name, method, total_price, status, checkout_url, order_url, billet_url, billet_digitable_line, billet_due_date, pix_code, pix_code_image64, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt_transaction->bind_param(
        "sssdssssssssss",
        $data['transaction_id'],
        $data['store_name'],
        $data['method'],
        $data['total_price'],
        $data['status'],
        $data['checkout_url'],
        $data['order_url'],
        $data['billet_url'],
        $data['billet_digitable_line'],
        $data['billet_due_date'],
        $data['pix_code'],
        $data['pix_code_image64'],
        $data['created_at'],
        $data['updated_at']
    );
    $stmt_transaction->execute();

    // Prepara a inserção na tabela `customers`
    $stmt_customer = $conn->prepare("INSERT INTO customers (transaction_id, name, document, email, phone) VALUES (?, ?, ?, ?, ?)");
    $stmt_customer->bind_param(
        "sssss",
        $data['transaction_id'],
        $data['customer']['name'],
        $data['customer']['document'],
        $data['customer']['email'],
        $data['customer']['phone']
    );
    $stmt_customer->execute();

    // Prepara a inserção na tabela `addresses`
    $stmt_address = $conn->prepare("INSERT INTO addresses (transaction_id, street, number, district, zip_code, city, state, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt_address->bind_param(
        "ssssssss",
        $data['transaction_id'],
        $data['address']['street'],
        $data['address']['number'],
        $data['address']['district'],
        $data['address']['zip_code'],
        $data['address']['city'],
        $data['address']['state'],
        $data['address']['country']
    );
    $stmt_address->execute();

    // Loop através dos planos e insere cada um na tabela `plans`
    foreach ($data['plans'] as $plan) {
        $stmt_plan = $conn->prepare("INSERT INTO plans (transaction_id, plan_name, description, amount, value, created_at) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt_plan->bind_param(
            "sssids",
            $data['transaction_id'],
            $plan['name'],
            $plan['description'],
            $plan['amount'],
            $plan['value'],
            $plan['created_at']
        );
        $stmt_plan->execute();

        // Obtém o ID do plano inserido
        $plan_id = $stmt_plan->insert_id;

        // Loop através dos produtos do plano e insere cada um na tabela `products`
        foreach ($plan['products'] as $product) {
            $stmt_product = $conn->prepare("INSERT INTO products (plan_id, product_name, description, amount, photo, created_at) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt_product->bind_param(
                "ississ",
                $plan_id,
                $product['name'],
                $product['description'],
                $product['amount'],
                $product['photo'],
                $product['created_at']
            );
            $stmt_product->execute();
        }
    }

    // Fecha as declarações
    $stmt_transaction->close();
    $stmt_customer->close();
    $stmt_address->close();
    $stmt_plan->close();
    $stmt_product->close();

    // Retorna uma resposta de sucesso
    http_response_code(200);
    echo json_encode(["status" => "sucesso", "message" => "Dados inseridos com sucesso."]);
} else {
    // Retorna uma resposta de erro caso os dados estejam incorretos
    http_response_code(400);
    echo json_encode(["status" => "erro", "message" => "Dados inválidos."]);
}

// Fecha a conexão
$conn->close();
?>