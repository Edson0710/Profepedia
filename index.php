<?php
  
  require_once('models/maestrosModel.php');
  require_once('models/usuarioModel.php');
  $maestros = new MaestrosModel();
  $maestros = $maestros->getAll();
  $usuarioM = new UsuariosModel();
  require_once('views/index.php')
?>