<?php
require_once("config.php");
//RETORNA UM REGISTRO DE USUARIO
// $user = new Usuario;
// $user->loadById(3);
// echo $user;

//RETORNA UMA LISTA DE USUARIOS
// $lista = Usuario::getList();
//  echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
// $search = Usuario::search("a");
// echo json_encode($search);

//CARREGAR UM USUARIO USANDO LOGIN E SENHA
// $user = new Usuario;
// $user->login("Gabriela","142536");
// echo $user;

//INSERIR NOVO USUARIO
// $user = new Usuario('Dflugann2018', '123456');
// $user->insert();
// echo $user;

// ATUALIZAÇÃO DO REGISTRO DO USUARIO
// $user = new Usuario();
// $user->loadById(12);
// $user->update("Gog", "123");
// echo $user;

$user = new Usuario();
$user->delete(12);
 ?>
