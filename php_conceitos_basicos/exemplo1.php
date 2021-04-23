<?php

$nome1 = "Joao";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome; //contatenação

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br>";

unset($nome1); //apaga a variável da memória

if (isset($nome1)) { //verificar se a variável foi definida antes
	
	echo $nome1;
}

?>