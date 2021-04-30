<?php

//prioridade

//$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3; // as duas operaçoes precisam ser verdadeiras para que o resultado seja true, se caso alguma delas for falsa, o resultado seraá false.
	
//echo $resultado;

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3; //se uma ou outra for verdadeira o resultado sera true, só é false se todas as operaçoes forem falsas.

var_dump($resultado);



?>