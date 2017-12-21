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

$user = new Usuario;
$user->login("Gabriela","142536");

echo $user;


 ?>
