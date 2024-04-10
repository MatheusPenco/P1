<?php
//nome do arquivo
$arquivo = 'estudos.txt';

// texto do arquivo (\n pula uma linha)
$texto ="\n texto do arquivo\n escrever as coisas aqui novamente";

// cria ou abre um arquivo existente
$arquivo_aberto = fopen($arquivo, 'a');

// escreve no arquivo aberto 
if(fwrite($arquivo_aberto, $texto) === false){
    die ('Não foi possivel escrever no arquivo');
}

// fecha o arquivo
fclose($arquivo_aberto);


//abre o arquivo para leitura apenas
$arquivo_leitura = fopen($arquivo, 'r');

//lê todo o conteudo do arquivo aberto
$conteudo = fread($arquivo_leitura, filesize($arquivo));

fclose($arquivo_leitura);

//exibe o conteudo do arquivo (NL2BR: interpreta o \n)
echo "conteudo do arquivo \n \n ". nl2br($conteudo);



?>