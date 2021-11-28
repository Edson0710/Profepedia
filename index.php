<?php
  
  require_once('models/maestrosModel.php');
  $maestros = new MaestrosModel();
  $maestros = $maestros->getAll();
  require_once('views/index.php')
?>