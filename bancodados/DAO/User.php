<?php  

class User {

	private $id_usuario;
	private $user_login;
	private $user_senha;
	private $datime_cadastro;

	public function getIdUsuario(){
		return $this->id_usuario;
	}
	public function setIdUsuario($value){
		$this->id_usuario = $value;
	}

	public function getUserLogin(){
		return $this->user_login;
	}
	public function setUserLogin($value){
		$this->user_login = $value;
	}

	public function getUserSenha(){
		return $this->user_senha;
	}
	public function setUserSenha($value){
		$this->user_senha = $value;
	}

	public function getDatimeCadastro()
	{
		return $this->datime_cadastro;
	}
	public function setDatimeCadastro($value)
	{
		$this->datime_cadastro = $value;
	}

	public function __construct($login = "", $password = ""){

		$this->setUserLogin($login);
		$this->setUserSenha($password);

	}

	//$db = Utilizado para escolher o banco de dados (vazio = MySQL, "SQL Server" = SQL Server)

	public function loadById($id, $db = ""){ //Carrega as informações a partir do ID do usuário

		$sql = new Sql($db);

		$results = $sql->select("SELECT * FROM tab_usuario WHERE id_usuario = :ID", array(
			":ID" => $id
		));
 
		if (isset($results[0])) { //validando o índice para buscar as informações pelo ID

			$this->setData($results[0]);

		}

	}

	public static function getList($db = ""){ //lista todos os usuários da tabela

		$sql = new Sql($db);

		return $sql->select("SELECT * FROM tab_usuario ORDER BY user_login;");

	}

	public static function findUser($userlogin, $db = ""){ //listar um usuário buscando pelo login

		$sql = new Sql($db);

		return $sql->select("SELECT * FROM tab_usuario WHERE user_login LIKE :USER ORDER BY user_login", array(
			":USER" => "%". $userlogin . "%"
		));

	}

	public function loginUser($login, $password, $db = ""){ //buscar usuário pela autenticação (login e senha)

		$sql = new Sql($db);

		$results = $sql->select("SELECT * FROM tab_usuario WHERE user_login = :LOGIN AND user_senha = :PASS", array(
			":LOGIN" => $login,
			":PASS" => $password
		));
 
		if (isset($results[0])) { //validando o índice para buscar as informações pelo login e senha

			$this->setData($results[0]);

		}else{

			throw new Exception("User login or password is invalid");
			
		}

	}

	public function insertUser($db = ""){ //coloca um novo usuário na tabela por Procedure do Banco
		$sql = new Sql($db);

		if (strcasecmp($db, "Sql Server") == 0){

			$results = $sql->select("EXEC sp_usuarios_insert :LOGIN, :PASSWORD" , array(
				":LOGIN" => $this->getUserLogin(),
				":PASSWORD" => $this->getUserSenha()
			));

		}else {

			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)" , array(
				":LOGIN" => $this->getUserLogin(),
				":PASSWORD" => $this->getUserSenha()
			));

		}

		if (isset($results[0])){

			$this->setData($results[0]);

		}

	}

	public function updateUser($login, $password, $db = ""){ //Atualiza dados na tabela

		$this->setUserLogin($login);
		$this->setUserSenha($password);

		$sql = new Sql($db);

		$sql->comandQuery("UPDATE tab_usuario SET user_login = :LOGIN, user_senha = :PASSWORD WHERE id_usuario = :ID", array(
			":LOGIN" => $this->getUserLogin(),
			":PASSWORD" => $this->getUserSenha(),
			":ID" => $this->getIdUsuario()
		));
		
	}

	public function deleteUser($id, $db = ""){  //Deleta linha de dados da tabela

		$this->setIdUsuario($id);

		$sql = new Sql($db);

		$sql->comandQuery("DELETE FROM tab_usuario WHERE id_usuario = :ID", array(
			":ID" => $this->getIdUsuario()
		));

		$this->setIdUsuario(null);
		$this->setUserLogin(null);
		$this->setUserSenha(null);
		$this->setDatimeCadastro(new DateTime ());

	}

	private function setData($dados){ //para que não precisasse usar o mesmo código repetidas vezes foi feito esse método

		$this->setIdUsuario($dados["id_usuario"]);
		$this->setUserLogin($dados["user_login"]);
		$this->setUserSenha($dados["user_senha"]);
		$this->setDatimeCadastro(new DateTime ($dados["datime_cadastro"]));
		
	}

	public function __toString(){
		
		return json_encode(array(
			"id_usuario" => $this->getIdUsuario(),
			"user_login" => $this->getUserLogin(),
			"user_senha" => $this->getUserSenha(),
			"datime_cadastro" => $this->getDatimeCadastro()->format("d/m/Y H:i:s")
		));

	}

}

?>