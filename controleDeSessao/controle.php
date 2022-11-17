<?php
//inicializo o sistema de controle de sessao

//verifica se o usuario esta logado
session_start();

if(!isset($_SESSION['id'])){

    header('Location: /tsi-php-2202/login');
    exit();}