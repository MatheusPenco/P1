<?php
/*
$nome = "Penco"; 
$valor = "Monkey";
$duracao = time() + (86400*30);

setcookie($nome , $valor , $duracao);


?>


<?php
if(isset($_COOKIE['Penco'])){
    echo "Existe <br>";
    echo "Penco: " . $_COOKIE['Penco'];
}
else{
    echo "N existe";
}

*/
?>



<?php
$nome = "Penco"; // Substitua pelo seu nome
setcookie("meu_cookie", $nome, time() + 365 * 24 * 60 * 60); // Duração de um ano
?>

<!-- Para verificar se o cookie existe -->
<?php
if (isset($_COOKIE["meu_cookie"])) {
    echo "O cookie existe.    Nome:   "   . $_COOKIE["meu_cookie"];
} else {
    echo "O cookie não existe.";
}

?>