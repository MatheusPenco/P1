<?php
/*
PHP = Personal Home Page e Hypertext Preprocessor
criado em 1994 pelo programador Rasmus Lerdof
Linguagem de script open source de uso geral
Utilizado para WEB
Pode ser embutido dentro do HTML
Executoado em server side, lado do servidor(Backend)
*/






/* SINTAXE DO PHP

É possivel incluir códigos PHP em paginas HTML , utilizando as tags < ?php  ?>
Deve-se colocar entre as tags , o conteudo desejado.

<!DOCTYPE html>
<html lang = "pt-br">
<head>
     <meta charset="utf-8">
     <title>PHP</title>
</head>
<body>

<?php
echo "OLA, MUNDO";

?>
*/




/*COMENTARIOS EM PHP

uma unica linda do codigo = // ou # */

// Em bloco = /*     */

/*
empty:
A função empty verifica se uma variável está vazia. Ela retorna verdadeiro (true) se a variável estiver vazia ou se o valor dela for falso (false), zero (0), uma string vazia (‘’), um array vazio, null ou não definido.
Exemplo:
PHP

$nome = ''; // Variável vazia
if (empty($nome)) {
    echo 'A variável $nome está vazia.';
}
Código gerado por IA. Examine e use com cuidado. Mais informações em perguntas frequentes.
isset:
A função isset verifica se uma variável está definida e não é null. Ela retorna verdadeiro (true) se a variável estiver definida e tiver um valor diferente de null.
Exemplo:
PHP

$idade = 25; // Variável definida
if (isset($idade)) {
    echo 'A variável $idade está definida.';
}
Código gerado por IA. Examine e use com cuidado. Mais informações em perguntas frequentes.
Em resumo:

empty: Verifica se a variável está vazia ou tem um valor falso.
isset: Verifica se a variável está definida e não é null.
*/

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Boletim</h1>
    <form  method="get" action="#">
        Nome : <input type="text" name="txtNome"><br>
        P1 : <input type="text" name="txtP1"><br>
        P2 : <input type="text" name=" txtP2"><br>
        Trabalho semestral: <input type="text" name="txtTrab"><br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>

<?php

if($_POST){
    $nome = $_GET['txtNome'];
    $p1 = $_GET [ 'txtP1'];
    $p2 = $_GET [ 'txtP2'];
    $trab = $_GET ['txtTrab'];


    echo "<br> Nome : " .$nome;
    echo "<br> Nota p1: " . $p1;
    echo "<br> Nota p2:" . $p2;
    echo "<br> Nota trabalho: " .$trab;

    $media = ($p1 + $p2 + $trab)/3;
    echo "<br>Média: " .number_format($media,2,',','.');
}