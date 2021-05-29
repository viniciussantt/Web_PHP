<?php

$conn = new PDO("sqlsrv:Database=dbphp_7;server=localhost\SQL2014;ConnectionPooling=0", "sa", "senha");

$conn->beginTransaction(); //iniciando uma Transação

$stmt = $conn->prepare("DELETE FROM tab_usuario WHERE id_usuario = :ID");

$id = "1";

$stmt->bindParam(":ID", $id);

$stmt->execute();

$conn->rollback(); //comando para cancelar aquela Transação, ou seja, foi cancelado o comando DELETE

//$conn->commit()  <- comando que confirma a transação

echo "Processo finalizado!";

?>