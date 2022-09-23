<?php  

//Exemplo 1 de FOPEN ---------------------------------------

/*$file = fopen("logs.txt", "a+"); //criando um arquivo txt

fwrite($file, "Olá meu compatriota hoje é dia " . date("d/m/Y") . "\r\n"); //colocando o conteúdo

fclose($file); //fechando o arquivo 

echo "Arquivo criado!";*/


//Exemplo 2 de FOPEN ---------------------------------------

//Criando um arquivo CSV para migrações

require_once 'config.php';

$sql = new Sql();

$users = $sql->select("SELECT * FROM tab_usuario ORDER BY id_usuario");

$headers = array();

foreach ($users[0] as $key => $value) {
	
	array_push($headers, ucfirst($key)); //pegando os cabeçalhos da tabela

}
 
$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n"); //para separar os cabeçalhos por vírgula (padrão CSV)

foreach ($users as $row) { //percorre as linhas

	$dados = array();

	foreach ($row as $key => $value) { //percorre as informações das colunas

		array_push($dados, $value);

	}

	fwrite($file, implode(",", $dados) . "\r\n"); //separar as informações por vírgula

}

fclose($file);

echo "Arquivo CSV criado com sucesso!";

?>