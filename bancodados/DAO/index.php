<?php 

require_once("config.php");

/*$banco = new Sql();
$consult = $banco->select("SELECT * FROM tab_usuario");
echo json_encode($consult);*/

//-----------------------------------
//Carrega só um usuário
//$usuario = new User();
//$usuario->loadById(1, "SQL Server");
//echo $usuario;

//-----------------------------------
//Carrega todos os usuários da tabela
//$list = User::getList();
//echo json_encode($list);

//-----------------------------------
//Busca de usuário pelo login
//$buscar = User::findUser("v");
//echo json_encode($buscar);

//-----------------------------------
//Busca usuário pela autenticação (login e senha)
//$authentication = new User();
//$authentication->loginUser("suka", "admin");
//echo $authentication;

//-----------------------------------
//Fazendo atualização de dados na tabela UPDATE
/*
$usuario = new User();
$usuario->loadById(1);
$usuario->updateUser("Vinicius", "admin");
echo $usuario;*/

//-----------------------------------
//Adcionando novo usuário na tabela
//$usuario = new User('root', 'root');
//$usuario->insertUser("Sql Server");
//echo $usuario;

//-----------------------------------
//Deleta o usuário da tabela
$user = new User();
$user->deleteUser(4, "SQL Server");
echo $user;

?>