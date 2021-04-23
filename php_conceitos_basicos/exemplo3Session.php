<?php

session_start();

session_regenerate_id(); //forçando a gerar novos IDs cada vez que a página atualizar

echo session_id(); //ID da sessão

echo "<br>";

var_dump($_SESSION);

?>