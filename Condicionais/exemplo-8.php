<?php

$condicao= true;
                 //while desde que a condição seja verdadeira ele irá executar.
while ($condicao){ 

$numero = rand(1, 10);  //rand, ecolha onde começa e onde termina para gerar numero aleatorios.

if($numero === 3){

	echo " TRES!!";

	$condicao = false;
}

echo $numero . " ";

}

?>