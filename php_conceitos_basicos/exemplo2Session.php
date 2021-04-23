<?php
//após iniciar com o outro arquivo essa sessão será mostrada

session_start();

echo $_SESSION['nome']; 

echo "<br>";

echo session_id(); //o ID da sessão

?>