<?php

// Uma das formas de fazer o AUTOLOAD para arquivos em outra pasta

function acharClasse($nomeDaClasse){
    
    if (file_exists($nomeDaClasse.".php")){

        require_once($nomeDaClasse.".php");

    }

}

spl_autoload_register("acharClasse");

//------------------------------------------------------

// Abaixo outra forma usando função anônima

spl_autoload_register(function($nomeDaClasse){

    if (file_exists("teste" . DIRECTORY_SEPARATOR . $nomeDaClasse . ".php")){

        require_once("teste" . DIRECTORY_SEPARATOR . $nomeDaClasse . ".php");

    }

});

$carro = new Opala();

$carro->acelerar(120);
echo "<br>";
$carro->freiar(88);

?>