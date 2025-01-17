<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anotações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center pag">
        <img src="img/notes.png" width="40px">
        <h1>Anotações</h1>
        <?php
        if (isset($_COOKIE['email']) && isset($_COOKIE['senha'])) {
            $email = $_COOKIE['email'];
            $senha = $_COOKIE['senha'];
        }
        ?>
        <form action="login.php" method="post">
            <label for="email" class="form-label">E-mail: </label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required>
            <label for="senha" class="form-label">Senha: </label>
            <input type="password" name="senha" id="senha" class="form-control" value="<?php echo $senha; ?>" required></label>
            <input type="checkbox" name="lembrar" id="lembrar" class="form-check-input">Lembrar-me
            <button type="submit" class="btn btn-warning mt-3 w-100"><a href="anotacoes.php">Entrar</a></button>
            <p>Novo Cadastro? <a href="cadastro.php">Clique Aqui</a></p>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<?php

if ($_POST){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $lembrar = isset($_POST['lembrar']) ? true : false;

    if ($lembrar == true){
        setcookie("email", $email, time()+3600, "/" );
        setcookie("senha", $senha, time()+3600, "/");
    }

}