<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';

$email = trim($_POST['usuario']);//trim() tira espaços do começo e do final
$senha = trim($_POST['senha']);

$stmt = $bd->prepare("  SELECT 
                            nome, senha 
                        FROM 
                            usuarios
                        WHERE
                            email = :email ");

$stmt->bindParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);//pega a primeira linha de resultado da consulta realizada

$autenticou = false;

if( isset($usuario['nome']) ){

    //comparar a senha para ver se está correta
    if(password_verify($senha,$usuario['senha'])){ //compara com a digitada com a do banco(criptografada)
        $autenticou=true;

         //sessão inicializada
    session_start();
    $_SESSION['id']=$email;// em todas as telas verificarei se esse id existe
    header('Location:/tsi-php-2202/menu');//não puxa o codigo igual o include, só joga para o menu
    }

}

include 'index.php';