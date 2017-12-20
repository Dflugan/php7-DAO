<?php
require_once("config.php");
$conn = new Sql;
$usuarios = $conn->select("SELECT * FROM tb_usuarios WHERE idusuario=3");

echo json_encode($usuarios);


 ?>
