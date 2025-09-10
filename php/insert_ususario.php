<?php

include 'conexao.php';

$nm_usuario = $_POST ['nome'];
$dt_nascimento = $_POST['dataNascimento'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$setor = $_POST['setor'];

print_r($_POST);

?>