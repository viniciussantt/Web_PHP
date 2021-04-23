<?php 

function ola(){ //função Olá

	return "Olá, meu mundo louco";
}

$frase = ola(); 

echo "Você disse: $frase ?";

echo "<br>";

echo strlen($frase); //quantidade de caracteres - strlen

?>

<?php  

echo "<br>";

function salario(){ 

	return 956.00;
}

echo "Vinícius recebeu dois salários: R$" . (salario() * 2) . ",00 "  //cálculo feito a partir da função

?>

<?php  
echo "<br>";

function anuncio($texto, $periodo = "Bom dia!") { //função com parâmetro

	return "$periodo Olá $texto como vai você? Espero que bem, porque eu tenho uma ótima notícia, saiu o novo som de Travis Scott, Franchise!! <br>";
}

echo anuncio("Vinícius"); //chamando parâmetros
echo anuncio("Susana");

?>