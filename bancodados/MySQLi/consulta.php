<?php

$conn = new mysqli("localhost", "root", "", "dbphp_7");

if ($conn->connect_error){

    echo "Error: " . connect_error;

}

//Consultando a tabela do Banco e transformando em JSON
$result = $conn->query("SELECT * FROM tab_usuario ORDER BY user_login");

$data = array();

while ($row = $result->fetch_assoc()) { //gerando um array com as informações do Banco

	array_push($data, $row);

}

echo json_encode($data);

?>