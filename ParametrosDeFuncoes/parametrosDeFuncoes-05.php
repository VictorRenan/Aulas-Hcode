<?php

function soma(int ...$valores){          //colocar a tipagem antes, define que todos os valores a virem serão equivalentes a tipagem declarada.
 
return array_sum($valores);
}

echo soma(2, 2);
echo"<br>";
echo soma(2, 2);
echo"<br>";
echo soma(2, 2);
echo"<br>";
echo soma(2, 2.1);
echo"<br>";
?>