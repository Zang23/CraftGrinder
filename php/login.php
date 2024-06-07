<?php

session_start();
require 'conexao.php';

$sql_code = "SELECT emailCliente, senhaCliente, nicknameCliente FROM tbclientes";
$prepare = $pdo->prepare($sql_code);
$count = $prepare->execute();

$usuarios = $prepare->fetchAll();

$nome_email = $_POST['nome_email'];
$senha = $_POST['senha'];

$_SESSION['perfilCadastrado'] = false;

foreach($usuarios as $usuario){

    if(strstr($nome_email, '@gmail.com') || strstr($nome_email, '@outlook.com') || strstr($nome_email, '@yahoo.com') || strstr($nome_email, '@hotmail.com') ){
        $email = $nome_email;

        if($email == $usuario['emailCliente'] and $senha == $usuario['senhaCliente']){
            $_SESSION['perfilCadastrado'] = true;
            header('location: ../html/index.php');
        }else{
            echo "Um erro ocorreu";
        }    
    }else{
        $nickname = $nome_email;

        if($nickname == $usuario['nicknameCliente'] and $senha == $usuario['senhaCliente']){
            $_SESSION['perfilCadastrado'] = true;
            header('location: ../html/index.php');
        }else{
            echo "Erro aconteceu"; 
        }
    }
}