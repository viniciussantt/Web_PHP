<?php

$nome = "Hcode"; //string com aspas duplas
$site = 'hcode.com.br'; //string aspas simples

$ano = 1999; //inteiro
$salario = 3500.00; //flutuante
$bloqueado = false; //booleano

////////////////////////////////////////////
$frutas = array("Banana", "Laranja", "Pera"); //vetor

//echo $frutas[2];

$nascimento = new DateTime(); //um objeto (POO)
var_dump($nascimento);

////////////////////////////////////////////
$arquivo = fopen("exemplo2.php", "r"); //manipulação de arquivos

//var_dump($arquivo);

$nulo = NULL;
$vazia = " ";
?>