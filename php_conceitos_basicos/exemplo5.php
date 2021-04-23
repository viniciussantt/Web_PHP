<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">

</form>

<?php //Acima um formulário em HTML

if(isset($_GET)){ 

	foreach ($_GET as $key => $value) { //for each com variável _GET para acessar respostas do usuário
		
		echo "Nome do campo: " . $key . "<br/>"; //a key é o primeiro valor do formulário, ou seja, "nome"

		echo "Valor do campo: " . $value . "<br/>"; //value é segundo, ou seja, o valor de "nascimento"

		echo "<hr/>";

	}

}

?>