<?php

//horários estarão vinculados ao servidor Apache

$date = new DateTime();  

$periodo = new DateInterval("P10D"); //retorna um intervalo para calculo de dias ou de horas

echo $date->format("d/m/Y H:i:s"); //instancia utilizando o método format

$date -> add($periodo); //adcionando o período

echo "<br>";

echo $date->format("d/m/Y H:i:s");

?>

<?php

//configuração regional
function exibeLocal(){
    return setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
}

?>