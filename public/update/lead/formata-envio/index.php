<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preencher Template</title>
</head>
<body>
    <h2>Envie sua lista e template</h2>
    <form action="process.php" method="POST">
        <label for="lista">Lista (formato: celular,nome,cep,produto,link):</label><br>
        <textarea name="lista" id="lista" rows="10" cols="50"></textarea><br><br>
        
        <label for="template">Templates:</label><br>
        <textarea name="template" id="template" rows="10" cols="50"></textarea><br><br>
        
        <button type="submit">Processar</button>
    </form>
</body>
</html>
