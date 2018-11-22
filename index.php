<?php 

require_once("config.php");

/*$sql= new Sql();

$usuarios=$sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/*
$root = new Usuario();

$root->loadById(1);

echo $root;
*/

//$lista = Usuario::getList();

//echo json_encode($lista);

//$search=Usuario::search("jo");
//echo json_encode($search);

//$usuario = new Usuario();
//$usuario->login("root","1234");

//echo $usuario;

//Alterar usuario
/*
$usuario= new Usuario();

$usuario->loadById(2);
$usuario->update("professor","12345678");
echo $usuario;*/

/*$usuario=new Usuario();
$usuario->loadById(2);

$usuario->delete(2);
echo $usuario;*/

//insert
$aluno= new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@123");

$aluno->insert();

echo $aluno;
 ?>