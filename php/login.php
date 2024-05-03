<?php

require 'conexao.php';

$sql_code = "SELECT emailCliente, senhaCliente, nicknameCliente FROM tbclientes";
$prepare = $pdo->prepare($sql_code);
$count = $prepare->execute();

$usuarios = $prepare->fetchAll();

$nome_email = $_POST['nome_email'];
$senha = $_POST['senha'];

foreach($usuarios as $usuario){

    if(strstr($nome_email, '@gmail.com')){
        $email = $nome_email;

        if($email == $usuario['emailCliente'] and $senha == $usuario['senhaCliente']){
            header('location: ../html/index.html');
        }else{
            echo "Um erro ocorreu";
        }    
    }else{
        $nickname = $nome_email;

        if($nickname == $usuario['nicknameCliente'] and $senha == $usuario['senhaCliente']){
            header('location: ../html/index.html');
        }else{
            echo "Erro aconteceu"; 
        }
    }
}