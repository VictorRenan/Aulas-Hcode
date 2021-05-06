<?php


$pessoas = array(
   
   'nome'=> 'Victor',
   'idade'=> 23


);

foreach ($pessoas as &$value) {     //foreach busca valores dentro do array

if(gettype($value) === 'integer') $value += 10;

	echo $value . '<br>';




}

print_r($pessoas);

?>