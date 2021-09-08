<?php 

//Aqui vai ficar a lógica de consulta na API com o PHP

//Se recebeu dados via POST guardar eles em uma variável
if (isset($_POST['cnpj'])) {
	
	$cnpj = $_POST['cnpj'];

	//variável $dados vai receber as informações da empresa de acordo com o CNPJ

	$dados = json_decode(file_get_contents('https://www.receitaws.com.br/v1/cnpj/' . $cnpj));

	//se o status da empresa for OK então printar as informações dela na tela
	
	if ($dados->status == "OK") {
		
		//printando informações
		echo "<pre>";
		echo "<h3>Consulta da Empresa: " . $dados->nome . "</h3>";
		echo "<hr>";
		echo "<h4>CNPJ: " . $dados->cnpj . "</h4>";
		echo "<hr>";
		echo "<p>Endereço: " . $dados->logradouro . " || Número: " . $dados->numero . " || Bairro: " . $dados->bairro . " </p>";

		echo "<p>CEP: " . $dados->cep . "</p>";
		echo "<p>Cidade: " . $dados->municipio . " || UF: " .$dados->uf. "</p>";
		echo "<p>Situação: " . $dados->situacao . "</p>";
		echo "<p>Data de abertura: " . $dados->abertura . "</p>";

	}else {

		echo "Error ao receber informações!";	

	}

} else {

	//se não tiver informação então recarrega a página
	header('Location: indexcnpj.php');

}



?>