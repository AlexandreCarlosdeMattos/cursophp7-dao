<?php

require_once("config.php");

/* // retorna em json
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

/* // retorna 1 usario da tabela
$root = new Usuario();
$root->loadById(3);
echo $root;
*/

/* //carrega uma lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/* //Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("jo");
echo json_encode($search);
*/

//Carrega um usuario autenticado usando o login e a senha
$usuario = new Usuario();
$usuario->login("mateus", "423988");

echo $usuario;
?>