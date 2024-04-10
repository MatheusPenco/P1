
<?php
//




/*
$numero = 10;

if($numero > 0){
    echo "Esse numero é positivo";
}
elseif($numero < 0){
    echo "Esse numero é negativo";
}
else{
    echo "Esse numero é nulo";
}

//vnyufvdfhbvfdhjkvfbdhjfvbnfduivdidb
#nrejgnriorengreiorengriorjngreremre


 $numero = 1;
do{
    echo $numero;
    $numero++;
}
while ($numero <= 20);
$soma = 0;*/
/*
FOR
for($numero = 0; $numero <=1000; $numero++){
echo " o numero é: $numero <br>";
}
*/
/*while
$numero = 1;
while($numero <= 10){
    echo $numero;
    $numero++;
}







function calcMedia($n1,$n2){
    $media = ($n1+$n2)/2;
    return  $media;
}


$n1 = 10;
$n2 = 5;
$resultado = calcMedia($n1,$n2);
echo "Sua média do $n1 e $n2 é: $resultado"


  session_start();
	$_SESSION["nome"] = "Gabriel"; 
		
		if(isset($_SESSION['nome'])){
		echo "A Sessão existe | Nome: " . $_SESSION["nome"];
	} else {
		echo "A Sessão não existe.";
	}*/

$soma = 0;

for($n = 1; $n <= 100; $n++) {
    $soma += $n;
}
echo "A soma dos numeros entre 1 e 10 sao: " . $soma;
?>



