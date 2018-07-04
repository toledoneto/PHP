<?php

require_once("config.php");

// //Carrega um user
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// //Carrega uma lista de usuários
// $lista Usuario::getList();
// echo json_encode($lista);

// //Carrega uma lista de usuários buscando pelo login
// $search = Usuario::search("jo");
// echo json_encode($search);

// //Carrega um usuário usando o login e senha
// $usuario = new Usuario();
// $usuario->login("root", "abc");
// echo $usuario;

// //Criando um novo usuário
// $aluno = new Usuario("aluno", "@lun0");
// $aluno->insert();
// echo $aluno;

// //Altera um usuário
// $usuario = new Usuario();
// $usuario->loadById(5);
// $usuario->update("professor", "!@#");
// echo $usuário

//Deleta um user
$usuario = new Usuario();
$usuario->loadById(2);
$usuario->delete();
echo $usuario;

?>