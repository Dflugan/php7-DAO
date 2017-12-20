<?php
spl_autoload_register(function($className){

  if (file_exists($className . ".php")) {
    $filename = $className. ".php";
    require_once($filename);
  }else {
    echo "NÃO EXISTE";
  }
});

 ?>
