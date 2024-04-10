
<?php

$email = $_POST['email'];
$passw = $_POST['password'];
$cookie = $_POST['remember'];

if (isset($_POST)) {
    if(isset($_POST["remember"])) {
        $email = $_POST['email'];
        setcookie("email", $email, time()+60);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard de Anotações</title>
  <link rel="stylesheet" href="styles2.css">
</head>
<body>
  <nav class="navbar">
    <div class="navbar-left">
      <h2>Minhas Anotações</h2>
    </div>
    <div class="navbar-right">
      <span class="user-email"><?php echo $email; ?></span>
      <button id="logout-btn">Sair</button>
    </div>
  </nav>

  <div class="dashboard-container">
    <div class="main-content">
      <h1>Dashboard de Anotações</h1>
      <div class="note-editor">
        <h2>Nova Anotação</h2>
        <textarea id="note-content" rows="10" placeholder="Digite sua anotação aqui..."></textarea>
        <button id="save-btn">Salvar</button>
      </div>
      <div class="note-display">
        <h2>Suas Anotações</h2>
        <div id="notes-list">
          <!-- As anotações serão exibidas aqui -->
        </div>
      </div>
    </div>
  </div>
</body>

</html>
