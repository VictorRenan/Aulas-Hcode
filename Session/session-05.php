<?php

require_once("config.php");

echo session_save_path();

echo '<br>';                      //para entender mais sobre sessions, utilizar o site php.net e procurar na documentação

var_dump(session_status());


?>