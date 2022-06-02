<?php

//Puxando valores do formulário

//Puxando valores do formulário

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

//Realizando conexão com o banco de dados

include './conexao.php';

// echo 'Conexão realizado com sucesso! ' . $nome . '<p>Estamos pegando valores do formulário</p><br>';

//Incluindo dados na tabela Convidados

$sql = "INSERT INTO convidados (nome, sobrenome, email) VALUES ('$nome', '$sobrenome', '$email')";
if (mysqli_query($conn, $sql)) {
      echo "Gravado no banco de dados";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

echo "<h2>". $_POST['nome']." registrado!</h2>";

?>