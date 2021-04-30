<?php

$qualASuaIdade = 2;
$idadeCrianca =12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca){

echo "crianca";


}else if ($qualASuaIdade < $idadeMaior){

echo "Adolecente";

}else if ($qualASuaIdade < $idadeMelhor){

	echo "adulto";
}else {

	echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade"; //operador ternario 

?>