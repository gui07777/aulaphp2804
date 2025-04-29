<?php

include("conexao.php");

try{
    //verificar se o nome do usuário ja existe
    $varVerifica = $pdo->prepare("SELECT COUNT(*) FROM login WHERE usuario = :usuario");
    $varVerifica->bindParam(':usuario', $usuario);
    $varVerifica->execute();
}

?>