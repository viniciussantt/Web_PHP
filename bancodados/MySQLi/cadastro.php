<?php

//Testando a comunicação entre o MySQL e o PHP com o MySQLi

$conn = new mysqli("localhost", "root", "", "dbphp_7"); //abrindo conexão com o banco

if ($conn->connect_error){

    echo "Error: " . connect_error;

}
//Prepare = para enviar um comando de SQL para o banco
$stmt = $conn->prepare("INSERT INTO tab_usuario (user_login, user_senha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $senha); //ss = String para login e String para senha

$login = "Vinicius";
$senha = "admin";

//$stmt->execute(); //executar o que foi feita acima no banco

if ($stmt) {

    echo "Processo concluído!";
}

?>