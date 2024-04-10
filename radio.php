

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
    <h1>Cursos</h1>
    <input type="radio" name="curso" value="DSM">DSM<br>
    <input type="radio" name="curso" value="ADS">ADS<br>
    <input type="radio" name="curso" value="PQ">PQ<br>
    
    <input type="submit" value="Enviar"><br>

</form>
</body>
</html>


<?php
/*
if($_POST){
    $curso_selecionado = $_POST['curso'];
    echo "Curso Selecionado: $curso_selecionado <br>";

}
if($curso_selecionado == "DSM"){
    echo "Desenvolvimento de software <br>";
}
else if($curso_selecionado == "ADS"){
    echo "Analise e desenvolvi de sistema <br>";

}
else if($curso_selecionado == "PQ"){
        echo "Processos quimicos <br>";
}
else{
    echo "Curso nao enontrado";
}
*/
$cor = array("red", "green", "blue", "yellow");
	foreach ($cor as $x) {
	echo "$x <br>";
}

$carro = array("marca"=>"Ford",
							 "modelo"=>"Mustang");
                             '<br>';
                             $carro ["marca"] ="CORVET";
echo $carro ["modelo"];
                             

var_dump($carro);
?>