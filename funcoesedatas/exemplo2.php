<?php  

function ola() {

	$argumentos = func_get_args(); //Retorna o número de argumentos passados para a função
	return $argumentos;

}

var_dump(ola("Bom dia", 10));

?>

<?php  
echo "<br>";
echo "<br>";

$a = 10; //a variável definida antes não se altera fora da função caso ela esteja com parâmetro por valor

function trocaValor(&/*Esse I comercial é para passar parâmetros por referência*/$b){

	$b += 50;
	return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a; //com a referência esse $a ficou com valor alterado

?>