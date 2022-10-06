<?php

    //dados para conectarmos no banco de dados
    $dsn='mysql:dbname=senac;host=localhost;port=3307';
    $user= 'root';
    $pass = '';

    //conectamos ao banco de dados
     $bd =new pdo($dsn,$user,$pass);

    
?>