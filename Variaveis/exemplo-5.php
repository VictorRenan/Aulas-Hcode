<?php

$nome = "Glaucio";

function teste(){
global $nome;  //global faz com que a variavel seja reconhecida dentro de todos os escopos

echo $nome;

}

function teste2(){

 $nome = "Joao";

 echo $nome." "."agora no teste2"; // ." ". faz dar espaço entre as variaveis mostradas ao usuario, o . faz a concatenação de variaveis

}

teste();

teste2();

?>