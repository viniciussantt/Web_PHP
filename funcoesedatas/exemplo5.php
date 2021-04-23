<?php  

function test($callback){

	//processo de função anônima

	$callback();

}

test(function(){

	echo "Concluída a linha de código!";
});

echo "<br><br>";
?>

<?php

//Outra forma de usar a função anônima

$fn = function($a){

	echo $a;

};

$fn("E aí qual vai ser vai beijar ou vai morder?");

?>