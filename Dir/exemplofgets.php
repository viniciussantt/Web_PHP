<?php  

//FGETs lê linha por linha de um arquivo

$filename = "usuarios.csv";

if (file_exists($filename)) {

	$file = fopen($filename, "r"); //r = somente leitura

	$headers = explode(",", fgets($file));

	$dados = array();

	while ($row = fgets($file)) { //vamos converter de um arquivo csv para um JSON

		$dataRow = explode(",", $row);

		$key = array();

		for ($i = 0; $i < count($headers); $i++) {

			$key[$headers[$i]] = $dataRow[$i];

		}

		array_push($dados, $key);

	}

	fclose($file);

	echo json_encode($dados);

}

?>