<?php
//buscamos o código que conecta ao SGBD
//controle de acesso/sessao
require_once '../controleDeSessao/controle.php';
require_once '../bancoDeDados/conecta.php';
//include_onde(); não gera erro fatal se não existir 
//na linha 4 estamos trazendo todo o código de
//../bancoDeDados/conecta.php' para este código







//dados provenientes do form html
$nome=$_POST["nome"];
$turno=$_POST["turno"];
$dataa=$_POST["inicio"];

$consulta= $bd->prepare('INSERT INTO alunos
                    (nome,turno,inicio)
                    VALUES
                    (:nome,:turno,:inicio)');

/*

a função $bd->prepare() retorna
outra variavel(objeto),essa outra 
variável consegue juntar os dados
do usuário com a consulta SQL

*/

$consulta->bindParam('nome',$nome);
$consulta->bindParam('turno',$turno);
$consulta->bindParam('inicio',$dataa);
/*
a função $consulta->bindParam() substitui
os rótulos (ex:":nome") pelos dados
inseguros

*/
if($consulta->execute()){
    echo "Gravou com sucesso";
    
}else{
    echo "erro ao gravar nobd";
};
//finalmente executamos a consulta
//no sgbd
?>