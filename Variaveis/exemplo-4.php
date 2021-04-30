<?php

$nome = (int)$_GET["a"]; //define o valor da variavel no navegador após o ?
        // () antes do get faz a tipagem da variavel

//var_dump($nome);

$ip =$_SERVER["SCRIPT_NAME"];   // SCRIPT_NAME mostra o caminho do diretorio, REMOTE_ADDR mostra o ip do servidor de acesso do usuario

echo $ip;

?>