<?php

$nome = $_GET["a"]; //o get recebe todas variáveis vindas de parâmentros na URL

var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; //visualiza os ips de usuários que acessam o servidor via internet

echo $ip;
?>