<?php

$pdo = new PDO('mysql:host=localhost;dbname=testeid' , 'root', '');
$pdo-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql_code = "SELECT vetorsql FROM usuarios";
$prepare = $pdo->prepare($sql_code);
$count = $prepare->execute();

$charutos = $prepare->fetchAll();

/*print_r($charutos);*/



foreach($charutos as $charuto){
    
    foreach($charuto['vetorsql'] as $indice => $item){
        $charuto['quantidade'][$indice];
    }
}