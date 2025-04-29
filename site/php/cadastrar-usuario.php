<?php

include("conexao.php");

try{
    //verificar se o nome do usuário ja existe
    $varVerifica = $pdo->prepare("SELECT COUNT(*) FROM login WHERE usuario = :usuario");
    $varVerifica->bindParam(':usuario', $usuario);
    $varVerifica->execute();

    if($varVerifica->fetchColumn() > 0) {
        echo "usuario já cadastrado";
        exit;
    }
    //criptografar a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);
    //iniciar uma transaçao
    $pdo->beginTransaction();

    //cadastrar/inserir usuarios na tabela
    $varLogin = $pdo->prepare("INSERT INTO login (usuario, senha) VALUES
    (:usuario, :senha");

    $varLogin->bindParam(':usuario', $usuario);
    $varLogin->bindParam(':senha', $senha);
    $varLogin->execute();
}

?>