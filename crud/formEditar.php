<?php
//buscamos o codigo que coneca no sgbd
require_once '../bancoDeDados/conecta.php';

$consulta= $bd->prepare("SELECT id,nome,turno,inicio
                        FROM alunos 
                        WHERE id= :id");

$id=$_POST["id"];
$nome=$consulta["nome"];
$turno=$consulta["turno"];
$dataa=$consulta["inicio"];


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atualizar.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?php echo $aluno['nome'] ?>">
    <br>
    <label for="turno"> Turno:</label>
    <select name="turno" id="turno">
        <option value="">Escolha</option>
        <option value="matutino" 
        <?php echo $aluno['turno']== 'matutino' ? 'selected':'';
        ?>>Matutino</option>
        <option value="vespertino"
        <?php echo $aluno['turno']=='vespertino'?'selected':'';
        ?>>Vespertino</option>
        <option value="noturno"
        <?php echo $aluno['turno']=='noturno'?'selected':'';
        ?>>Noturno</option>
</select>
<br><br>
<label for="inicio">Inicipo</label>
<input type="date" name="inicio" id="inicio" value="<?php echo $aluno['inicio']; ?>" >

<br><br>
<input type="hidden" name="id" value="<?php echo $aluno['id']; ?>"> 
<input class="btn" type="submit" value="Gravar">
</body>
</html>