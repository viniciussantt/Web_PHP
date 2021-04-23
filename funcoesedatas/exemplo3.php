<?php  

$pessoas = array(
	'nome' => 'Vinicius',
	'idade' => 20
);

foreach ($pessoas as &$value) { //usando referência também em arrays e foreach
	
	if (gettype($value) === "integer") $value += 10; //quando encontrar um tipo inteiro no array somar com 10

	echo $value . " <br>";
	
}

print_r($pessoas); //printando o array com o valor alterado

?>