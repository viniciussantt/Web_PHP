<?php

echo "<select>"; //criando uma caixa com opções de anos 

for ($i = date("Y"); $i >= date("Y") - 100; $i--) {

	echo '<option value="'.$i.'">'.$i.'</option>';

}

echo "</select>";

?>