<?php

session_start();
include('../php/conexao.php'); 

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));


$sql = "select count(*) as total from usuario where usuario='$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    header('Location: ../views/cadastro.php');
    exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro) VALUES ('$nome', '$email', '$senha', NOW())";

if ($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = TRUE;
}

$conexao->close();
header('Location: ../views/cadastro.php');
exit;