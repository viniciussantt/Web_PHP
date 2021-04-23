<?php
//alterando a hora para o fuso horário brasileiro

$data = new DateTime();

$data->setTimezone(new DateTimeZone('America/Sao_Paulo'));

echo $data->format("d/m/Y H:i:s");

?>