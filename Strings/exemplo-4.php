<?php

$frase = "A repeticao e mae da retencao.";
$palavra = "mae";

$q = strpos($frase,"mae" ); // strpos($,"") faz a busca da primeira vez que aparece na string uma palavra ou letra.

$texto = substr($frase, 0, $q); //substr($, n, n) faz a busca dentro de um espaço determinado.

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); //strlen($) conta o numero de letras de uma string

var_dump($texto);

echo "<br>";

var_dump($texto2);


?>