<?php
// chama o controle de sessão
require '../controleDeSessao/controle.php';
//destroi a sessao
session_destroy();
//redireciona o usuário para tela de login
header('Location: /tsi-php-2202/login');