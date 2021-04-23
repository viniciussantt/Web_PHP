<?php

session_start();

session_save_path(); //Obtém e/ou define o caminho para armazenamento da sessão atual

var_dump(session_status()); //é usada para retornar o status atual da sessão

echo "<br>";

switch (session_status()) { 
	case PHP_SESSION_DISABLED: //constantes pré-definidas do session_status
		echo "As sessões estiverem desabilitadas.";
		break;
	
	case PHP_SESSION_NONE:
		echo "As sessões estiverem habilitadas, mas nenhuma existir.";
		break;
	
	case PHP_SESSION_ACTIVE:
		echo "As sessões estiverem habilitadas, e uma existir.";
		break;
}

?>