<?php

require 'conexao.php';

$sql_code = "SELECT email, senha FROM tbclientes";
$prepare = $pdo->prepare($sql_code);
$count = $prepare->execute();

$usuarios = $prepare->fetchAll();

$nome_email = $_POST['nome_email'];
$senha = $_POST['senha'];

if(strstr($nome_email, "@gmail.com")){
    $email = $nome_email;
    
    foreach($usuarios as $usuario){
        if($email == $usuario['email'] and $senha == $usuario['senha']){
            header('location: ../html/index.html');
        }else{
            echo "Ocorreu algum erro";
        }
    }
}else{
    $nome = $nome_email;
}