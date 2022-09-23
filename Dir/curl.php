<?php 

//------- Utilizando a biblioteca CURL ------------- //

$cep = "01001000";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link); // --- Iniciando

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  //----- envia a informação e espera uma resposta em JSON 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);  //----- por ser uma requisição HTTPs

$response = curl_exec($ch); //----- executando

curl_close($ch); //------ finalizando a busca

$data = json_decode($response, true);

print_r($data);

?>