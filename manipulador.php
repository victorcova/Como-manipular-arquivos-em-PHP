<?php
$arquivo1 = 'arquivo.txt';

$nome_novo_arquivo = date('his-d-m-Y');
$arquivo2 = 'arquivo_'.$nome_novo_arquivo.'.txt'; // cria um nome de arquivo unico, exemplo: arquivo_hora_data.txt

$fopen1 = fopen($arquivo1, 'r'); // abre o arquivo 1 no modo leitura
$fopen2 = fopen($arquivo2, 'a'); // abre o arquivo 2 no modo escrita
//Saiba mais sobre os parametros de arquivos aqui: https://www.mundotibrasil.com.br/manipulacao-de-arquivos-do-tipo-texto-com-php/


$texto = fread($fopen1, filesize($arquivo1)); // Le o arquivo 1

fwrite($fopen2, $texto); // Escreve o que leu no arquivo 2

$conteudo = "\r\n11;FULANO CICLANO DE TAL;11122233300;61-33339999;1\r\n"; // Meu conteudo novo - obs: use o \r\n para quebrar a linha do arquivo txt
fwrite($fopen2, $conteudo);

fclose($fopen1); // fecha arquivo 1
fclose($fopen1); // fecha arquivo 2

//unlink($arquivo1); // Caso deseje excluir o arquivo 1

?>
