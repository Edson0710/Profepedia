<?php
    require_once('../models/maestrosModel.php');
    $id = $_GET['id'];
    echo $id;
    $maestro = new MaestrosModel();
    $maestro = $maestro->getBy('id', $id);
    $maestro = $maestro[0];
    require_once '../views/panel_profesor.php';
?>