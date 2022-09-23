<?php

$conn = new PDO("sqlsrv:Database=dbphp_7;server=localhost\SQL2014;ConnectionPooling=0", "sa", "senha");

$stmt = $conn->prepare("SELECT * FROM tab_usuario ORDER BY user_login");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($results);

?>