<?php

//include "exemplo-1.php"; //../ <- sobe uma pasta
                         //caso o arquivo esteja dentro de outro diretorio, informar antes do arquivo. O recurso include tenta buscar a função mesmo se nao estiver dentro do diretorio escolhido, ele tambem busca no diretorio de funções que vem incluso na configuraçao do php. include path

require_once "exemplo-1.php"; // o recurso require, exige que a função esteja funcionando e esteja no diretorio inserido.
require_once "exemplo-1.php";// require/include_once, chama apenas uma vez a funçao, mesmo se solicitado no mesmo codigo que chame duas ou mais vezes.
$resultado = somar(10, 25);

echo $resultado;

?>