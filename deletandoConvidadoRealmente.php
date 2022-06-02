<?php

//Puxando valores do formulário

//Puxando valores do formulário

$email = $_POST['email'];

//Realizando conexão com o banco de dados

include './conexao.php';

// echo 'Conexão realizado com sucesso! ' . $nome . '<p>Estamos pegando valores do formulário</p><br>';

//Incluindo dados na tabela Convidados

$sql = "DELETE  FROM convidados WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>