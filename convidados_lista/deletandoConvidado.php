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

        <h1>Alterando convidado</h1>

            <!--Puxando valor do formulário-->

            <?php  $nomeCompleto = $_POST['nomeCompleto'];
            
                $nomeCompleto = $_POST['nomeCompleto'];

                $n = (explode(" ",$nomeCompleto));

                echo 
                
                "<h2>Convidado encontrado:</h2>

                <h2>Nome: " . $n[0] . "</h2><br>

                <h2>Sobrenome: " . $n[1] . "</h2>";

            ?>

            <!--Realizando conexão com o banco de dados-->

            <?php include './conexao.php';?>
            
            <!--Puxando dados do convidado no banco de dados-->

        <h2>2° - Insira o email para remover o convidado</h2>
        <form action="deletandoConvidadoRealmente.php" method="post">
            <input type="email" name="email" id="email" placeholder="Insira o email do convidado...">
            <input type="submit" class="submit-btn">
        </form>
      </main>
</body>
</html>