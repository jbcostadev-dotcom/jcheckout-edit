<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h3 style="text-align: center; margin-top: 50px;">Seu pagamento foi efetuado com sucesso</h3>
    <h5 style="text-align: center; margin-top: 20px;">Status: {{ ucwords(str_replace('_', ' ', request()->query('status'))) }}</h5>
</body>
</html>
