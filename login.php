<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <i><b><h1>Novo Cadastro</h1></b></i>
    <form method = "post" action = "#">
    Nome Completo : * <br>
    <input type="text" name="txtNome" placeholder="Digite aqui...">
<br><br>
    Email : * <br>
    <input type="text" name="txtEmail" placeholder="Digite aqui...">
    <br><br>
    Senha : * <br>
    <input type="text" name="txtSenha" placeholder="Digite aqui...">
    <br><br>
   Ano de nascimento : * <br>
    <input type="text" name="txtAnonascimento" placeholder="Digite aqui...">
    <br><br>
    Cidade:  * <br>
    <input type="text" name="txtCidade" placeholder="Digite aqui..."><br><br>
    Estado : *<br>
    <select name = "$estados">
    <?php
    $estado = array ("SP" , "RJ" , "SC" , "MG" , "RS") ;
    foreach ($estado as $escolha) {
        echo "<option value = '$estado'>$escolha</option><br>";
    }
    ?>
    </select>
    <p>Sexo : *</p>
    <input type="radio" name="Masc" value ="Masculino">Masculino<br>
    <input type="radio" name="Femi" value ="Feminino">Feminino<br>
    <input type="submit" value="cadastrar">
</form>
</body>
</html>