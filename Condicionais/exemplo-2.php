<?php

$diaDaSemana = 8; //date("w"); //o comando date("d,w,m ou y") indica qual o dia, semana, mes ou ano.

switch ($diaDaSemana) {

case 0:
echo "Domingo";
break;

case 1:
echo "Segunda-feira";
break;

case 2:
echo "Terca-feira";
break;

case 3:
echo "Quarta-feira";
break;

case 4:
echo "Quinta-feira";
break;

case 5:
echo "Sexta-feira";
break;

case 6:
echo "Sabado";
break;

default:
echo "Data invalida!";

}



?>