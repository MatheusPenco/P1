





<?php
/*
$numero = -10;

if($numero > 0){
    echo "Positivo";
}
elseif($numero < 0 ){
    echo "Negativo";
}
else{
    echo "Nulo";
}
*/




/*
$nums= array(10, 20, 30, 40, 50);
foreach($nums as $nums){
    echo "$nums \n";
}


	$nomes = array(
	array("Nome" => "Ana"),
	array("Nome" => "Maria"),
	array("Nome" => "Braga"),
	);
	
	foreach($nomes as $nome){
		echo $nome['Nome'] . "\n";
	}


//nome do arquivo
$arquivo = 'exemplo.txt';

//texto do arquivo (\n pula uma linha)
$texto = "\n Penco";

//Cria ou abre o arquivo
$arquivo_aberto = fopen($arquivo, 'w');

fwrite($arquivo_aberto, "\nnigger");
fread($arquivo,filesize("exemplo.txt"));

fclose($arquivo_aberto);*/

$numero = 10;

if($numero < 0){
	echo "Negativo";
}
elseif($numero > 0){
	echo "positivo";
}
else{
	echo "nulo";
}

?>