<?php  

error_reporting(0);

$name = "images";

//para saber se uma pasta existe, se não existir poderá ser criada

if (!is_array($name)){

	//mkdir($name);
	//echo "Folder created successfully!" . "<br>";

}

//--------------------------------------

$images = scandir("images");

$data = array();

foreach ($images as $image) {
	
	if (!in_array($image, array(".", ".."))){ //aqui estou ignorando o "." e ".." do acesso aos arquivos

		$filename = "images" . DIRECTORY_SEPARATOR . $image;

		$information = pathinfo($filename); //informações do arquivo

		$information["size"] = filesize($filename); //tamanho do arquivo

		$information["modified"] = date("d/m/Y H:i:s", fileatime($filename)); //data de modificação

		$information["URL"] = "http://localhost/dir/" . str_replace("\\", "/", $filename); //abrir url do arquivo

		array_push($data, $information);

	}

}

echo json_encode($data);


?>