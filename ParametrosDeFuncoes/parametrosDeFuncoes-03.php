<?php

$a = 10;



function trocaValor(&$a){     //colocar o & transforma a função em passagem por referencia, ou seja, altera o valor da variavel pela funçao e fora da funçao ela recebe as mudanças feitas dentro da function 


$a += 50;

return $a;


}

echo trocaValor($a);
echo "<br>";
echo  $a;
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo  $a;
echo "<br>";
echo  $a;



?>