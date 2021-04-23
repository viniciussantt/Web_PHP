<?php

$nome = "joao victor";

echo strtoupper($nome); //deixar a palavra em caixa alta

echo "<br>";

echo strtolower($nome); //deixar a palavra em caixa baixa

echo "<br>";

echo ucwords($nome); //deixa cada primeira letra de cada palavra em maiúsculo

echo "<br>";

echo ucfirst($nome); //deixa a primeira letra do parágrafo maiúscula
////////////////////////////////////////////////////
echo "<br>";
$empresa = "Hcode";

$empresa = str_replace("o", "0", $empresa); //para mudar uma letra por outra

$empresa = str_replace("e", "3", $empresa);

echo $empresa;
echo "<br>";
////////////////////////////////////////////////////
$frase = "A repetição é a mãe da retenção.";

$q /* querry string */ = strpos($frase, "mãe"); //indica a posição da palavra

$texto = substr($frase, 0, $q); //cria um subtexto que vai do início até antes de "mãe"

$texto2 = substr($frase, strpos($frase, "mãe")); //cria um subtexto que vai de "mãe" até o restante

echo $texto;
echo "<br>";
echo $texto2;
?>