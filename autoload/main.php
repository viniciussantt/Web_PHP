<?php

function __autoload($nomeDaClasse){ //exemplo de AUTOLOAD para importar outros arquivos do projeto

    require_once("$nomeDaClasse.php");
    
} //Nesse caso acima funciona quando os arquivos estão na mesma pasta

$carro = new Opala();

$carro->acelerar(100);
echo "<br>";
$carro->freiar(90);

?>