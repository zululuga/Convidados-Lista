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

$sql = "UPDATE convidados SET nome='$nome',sobrenome='$sobrenome' WHERE email='$email'";

if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
?>