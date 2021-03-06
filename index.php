<?php 

require_once("config.php");

//carrega um usuário
$root = new Usuario();
$root->loadById(1);
echo $root;
echo "<br/>";

//carrega uma lista de usuários
$lista = Usuario::getList();
echo json_encode($lista);
echo "<br/>";

//carrega uma lista de usuários buscando pelo login
$search = Usuario::search("jo"); 
echo json_encode($search);
echo "<br/>";

//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("jose", "qwerty");
echo $usuario;
echo "<br/>";

//cria um novo usuario
$aluno = new Usuario("joão", "123456");
$aluno->insert();
echo $aluno;
echo "<br/>";

//altera um usuário
$usuario = new Usuario();
$usuario->loadById(1);
$usuario->update("professor", "123456789");
echo "<br/>";

//deleta um usuário
$usuario = new Usuario();
$usuario->loadById(2);
$usuario->delete();
echo $usuario;
echo "<br/>";

?>
