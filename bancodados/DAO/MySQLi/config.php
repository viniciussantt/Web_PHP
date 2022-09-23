<?php  

spl_autoload_register(function($filenm){

	$filename = $filenm . ".php";

	if (file_exists($filename)){

		require_once($filename);

	}

});

?>