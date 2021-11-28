<?php
// 
  
  require_once('models/maestrosModel.php');
  $maestro = new MaestrosModel();
  var_dump($maestro->getAll());
  require_once('views/index.php')
  // 
?>