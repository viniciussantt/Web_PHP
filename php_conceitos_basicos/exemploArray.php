<?php

$pessoas = array(); //criando variável com array vazio

array_push($pessoas, array( //array push adiciona valores a um array já criado
	'Nome' => 'Vinicius',
	'Idade' => 20
));

array_push($pessoas, array(
	'Nome' => 'Susana',
	'Idade' => 19
));

//print_r($pessoas); //mostrar arrays na tela

echo json_encode($pessoas); //convertendo o array para o JSON
echo "<br><br>";
?>

<?php

$json = '[{"Nome":"Vinicius","Idade":20},{"Nome":"Susana","Idade":19}]';

json_decode($json, true); //voltando o JSON para o array normal

var_dump($json);

?>