<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>CRUD | Buscando Convidado</title>
</head>
<body>
    <main>
    <a href="./index.html">Voltar ao menu</a>

        <h1>Buscando convidado</h1>
        <h2>1° - Insira o email do convidado</h2>
        <form action="buscandoConvidado.php" method="post">
            <input type="email" name="email" id="email" placeholder="Insira o email do convidado...">
            <input type="submit" class="submit-btn">
        </form>
    </main>
</body>
</html>