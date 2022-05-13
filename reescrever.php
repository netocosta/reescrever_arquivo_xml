<?php

$arquivo = 'original.xml';
$novo_arquivo = 'reescrito.xml';
$novo_buffer = '';

while (!feof($arquivo)) {
  $buffer = fgets($arquivo, filesize($file));
  $novo_buffer .= str_replace("soap:", "soap", $buffer);			
}
fclose($arquivo);
	
$escreve_arquivo = fopen($novo_arquivo, "w");
if ($escreve_arquivo) {
  fwrite($escreve_arquivo, $novo_buffer);
}
fclose($escreve_arquivo);
