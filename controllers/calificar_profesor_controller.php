<?php
    require_once('../models/maestrosModel.php');
    $id = $_GET['id'];
    $clave = $_GET['clave'];

    $maestro = new MaestrosModel();
    $maestro = $maestro->getBy('id', $id);
    $maestro = $maestro[0];
    require_once '../views/calificar_profesor.php';
?>