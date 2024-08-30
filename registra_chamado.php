<?php
//print_r($_POST);

$arquivo = fopen('arquivo.hd','a'); /*aqui eu abro o arquivo e chamo um parametro*/

$titulo=str_replace('#','-', $_POST['titulo']);/*criamos variaveis e substituir # por -*/
$categoria=str_replace('#','-', $_POST['categoria']);
$descricao=str_replace('#','-', $_POST['descricao']);

$texto = $titulo.'#'. $categoria .'#'. $descricao . PHP_EOL; /*aqui é pra separarmos e tmbm a quebra de linha*/

fwrite($arquivo, $texto); /*aqui chamamos a variavel*/

//echo $texto;

fclose($arquivo); /* fechamos o arquivo*/

header('Location: abrir_chamado.php'); /*onde termina FIM*/

?>