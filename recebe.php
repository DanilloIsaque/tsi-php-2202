<?php
   
    
    echo'olá, '.$_POST["nomeUsuario"].'<br>';
    echo'sua idade é '.$_POST["idadeUsuario"];
    echo "<br>";
    echo'seu cpf é '.$_POST["cpfUsuario"];
    echo "<br>";
    echo'seu periodo é '.$_POST["periodoUsuario"].'<br>';

    echo "voce tem {$_POST['idadeUsuario']}, CPF: {$_POST['periodoUsuario']}";

    $arquivo =fopen('alunos.csv','a' );//abre o arquivo para append
//csv é valores separados por virgula

    //fwrite($arquivo,"{$_POST['nomeUsuario']")//uma forma
        /////

    $nome=$_POST['nomeUsuario'];
   $idade=$_POST['idadeUsuario'];
    $cpf=$_POST['cpfUsuario'];
    $periodo=$_POST['periodoUsuario'];

    fwrite($arquivo,"$nome,$idade,$cpf,$periodo\r\n");
    fclose($arquivo);
?>