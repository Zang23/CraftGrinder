<?php

require 'conexao.php';

$sql_code = "SELECT email, senha, nome_usuario FROM tbclientes";
$prepare = $pdo->prepare($sql_code);
$count = $prepare->execute();

$usuarios = $prepare->fetchAll();

$nome_email = $_POST['nome_email'];
$senha = $_POST['senha'];

foreach($usuarios as $usuario){
    if(strstr($nome_email, '@gmail.com')){
        $email = $nome_email;

        if($email == $usuario['email'] and $senha == $usuario['senha']){
            header('location: ../html/index.html');
        }else{
            echo "Um erro ocorreu";
        }    
    }else if(strlen($nome_email) <= 5){
        $nickname = $nome_email;

        if($nickname == $usuario['nome_usuario'] and $senha == $usuario['senha']){
            header('location: ../html/index.html');
        }else{
            echo "Erro aconteceu"; 
        }
    }
}