<?php

$conn = new PDO("mysql:dbname=dbphp_7; host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM tab_usuario ORDER BY user_login");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //Faz o mesmo processo da consulta feita por while

foreach ($results as $row) {
    
    foreach ($row as $key => $value) {
        echo "<strong>". $key . ": </strong> " . $value . "<br>";
    }

    echo "=========================" . "<br>";
}

//----------- Abaixo como seria o código com JSON -------------

/*$data = array();

while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)){

    array_push($data, $row);  //$row significa o ponteiro que se move pela matriz
                                            
}

echo json_encode($data);*/

?>