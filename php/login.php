<?php

require 'conexao.php';

$nome_email = $_POST['nome_email'];
$senha = $_POST['senha'];

if(strstr($nome_email, "@gmail.com")){
    $email = $nome_email;
}else{
    $nome = $nome_email;
}