<?php

function ola($texto = 'aoba',$periodo = 'Boa noite', $pepino = 'rapaziada'){       //podemos criar variaveis dentro da function

echo "aeho $texto $periodo $pepino <br>";                            // a partir da primeira variavel, as proximas deverão ser obrigatoriamente declaradas na hora de serem chamadas por um echo por exemplo.



}


echo ola("Mundo","");     //deixar com aspas duplas vazias apos as virgula, faz ignorar a variavel declara na function.
echo ola();
echo ola("Nath","Bom dia");



?>