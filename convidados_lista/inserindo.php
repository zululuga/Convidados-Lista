<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>CRUD | Inserindo Convidado</title>
</head>
<body>
    <main>
    <a href="./index.html">Voltar ao menu</a>

        <h1>Inserindo convidado</h1>
        <p>Insira o nome, sobrenome e email do convidado abaixo:</p>
        <form action="inserindoConvidado.php" method="post">
            <input type="text" name="nome" id="nome" placeholder="Insira o nome do convidado...">
            <input type="text" name="sobrenome" id="sobrenome" placeholder="Insira o sobrenome do convidado...">
            <input type="email" name="email" id="email" placeholder="Insira o email do convidado...">
            <input type="submit" class="submit-btn">
        </form>
    </main>
</body>
</html>