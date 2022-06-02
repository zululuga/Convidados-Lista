<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>CRUD | Alterando Convidado</title>
</head>
<body>
    <main>
    <a href="./index.html">Voltar ao menu</a>

        <h1>Deletando convidado</h1>
        <h2>1° - Insira o nome e o sobrenome para alterarmos o convidado</h2>
        <form action="deletandoConvidado.php" method="post">
            <input type="text" name="nomeCompleto" id="nome" placeholder="Insira o nome completo do convidado...">
            <div class="btns">
                <input type="submit" class="submit-btn" value="Buscar">
                <input type="reset" class="submit-btn" value="Limpar">
            </div>
            <a href="inserindo.php">Voltar</a>
        </form>
    </main>
</body>
</html>