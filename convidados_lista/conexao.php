<?php
$servidor = "localhost";
$utilizador = "root";
$senha = "";
$bd = "convidado";

// Criando conexão com o banco de dados
$conn = mysqli_connect($servidor, $utilizador, $senha, $bd);

// Checando conexão
if (!$conn) {
  die("A conexão falhou: " . mysqli_connect_error());
}
?>