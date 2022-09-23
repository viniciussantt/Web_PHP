<?php  

class Sql extends PDO { //Data Acess Object

	private $conn;

	public function __construct($database = ""){
		//Agora conectamos com o banco através de um Construtor
		//SQL Server ou MySQL
		if (strcasecmp($database, "Sql Server") == 0){
		
			$this->conn = new PDO("sqlsrv:Database=dbphp_7;server=localhost\SQL2014;ConnectionPooling=0", "sa", "senha");
		
		}else{

			$this->conn = new PDO("mysql:dbname=dbphp_7; host=localhost", "root", "");

		}
		
	}

	private function setParam($statement, $param, $value){

		$statement->bindParam($param, $value);					//Dois métodos para tratar passagem de parâmetros

	}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement, $key, $value);

		}

	}

	public function comandQuery($rawQuery, $params = array()){ //Nesse método podemos passar as querys e seus parâmetros

		$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;

	}

	public function select($rawQuery, $params = array()):array
	{  //Nesse método podemos fazer a consulta

		$stmt = $this->comandQuery($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}


?>