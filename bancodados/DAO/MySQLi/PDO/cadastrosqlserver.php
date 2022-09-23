<?php

$conn = new PDO("sqlsrv:Database=dbphp_7;server=localhost\SQL2014;ConnectionPooling=0", "sa", "senha");

//Cadastrando dado na tabela
//$stmt = $conn->prepare("INSERT INTO tab_usuario (user_login, user_senha) VALUES (:LOGIN, :PASSWORD)");

//Atualizando dado da tabela
$stmt = $conn->prepare("UPDATE tab_usuario SET user_login = :LOGIN, user_senha = :PASSWORD WHERE id_usuario = :ID");

$login = "vinicius";
$senha = "senha";
$id = "1";

$stmt->bindParam(":LOGIN", $login); //ele faz a conexão entre a variável e o "apelido" da variável
$stmt->bindParam(":PASSWORD", $senha);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Processo finalizado!";
?>