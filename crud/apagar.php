<?php
//controle de acesso/sessao
require '../controleDeSessao/controle.php';
//buscamos o codigo que coneca no sgbd
require_once '../bancoDeDados/conecta.php';
//apenas para ficar mais facil de trabalhar
//?? quando não exsite $_POST['id']
$id=$_POST['id'] ?? null;


//evito q seja recebido um id
// qualquer coisa que seja diferente 
//de números(dígitos)
$id=preg_replace('/\D/','',$id);//posso usar o query e ficar seguro com isso
//tudo q for diferente de digito, quero q seja trangormado em nada, consigo permitir q nada além de numero vai ser passado
 if($bd->exec("DELETE FROM alunos WHERE id=$id")){
    $apagado=true;
 }else{
    $apagado=false;
 }

 include 'index.php'

?>