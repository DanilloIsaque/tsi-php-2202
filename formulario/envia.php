<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><div class="fom">
<form action ="recebe.php" method="post">
        <label for="nome">Nome:</label>
        <input type ="text" name="nomeUsuario" id="nome">
        <br>
        <label for="idade">Idade:</label>
        <input type ="number" name="idadeUsuario" id="idade">
        <br>
        <label for="cpf">CPF:</label>
        <input type ="number" name="cpfUsuario" id="cpf">
        <br>
        <label for="periodo">Escolha</label>
        <select name="periodoUsuario" id="periodo">
            <option value="">Escolha</option>
            <option value="matutino">matutino</option>
            <option value="vespertino">vespertino</option>
            <option value="noturno">noturno</option>

        <br>

        
        <input type="submit" value ="enviar">
</div>
   
</form>
</body>
</html>