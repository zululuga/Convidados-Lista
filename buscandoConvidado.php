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

    <?php

//Puxando valores do formulário

//Puxando valores do formulário

$email = $_POST['email'];

//Realizando conexão com o banco de dados

include './conexao.php';

// echo 'Conexão realizado com sucesso! ' . $nome . '<p>Estamos pegando valores do formulário</p><br>';

//Incluindo dados na tabela Convidados

$sql = "SELECT * FROM convidados WHERE email='$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["sobrenome"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
    </main>
</body>
</html>
