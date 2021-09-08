<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consultando CNPJs - Receita WS</title>
</head>
<body>

	<!-- Aqui vai ser criado uma caixa de consulta na página -->

	<form method="POST" action="cnpjconsulta.php">
		
		<label>CNPJ:</label>

		<input type="text" name="cnpj" maxlength="14" required> <!-- local onde vai ser digitado o CNPJ -->

		<input type="submit" value="Consultar"> <!-- botão de consultar -->

	</form>

</body>
</html>