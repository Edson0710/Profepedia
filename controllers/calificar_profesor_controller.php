<?php
    require_once('../models/maestrosModel.php');
    require_once('../models/imparteModel.php');
    $id = $_GET['id'];
    $clave = $_GET['clave'];

    $maestro = new MaestrosModel();
    $materias = new ImparteModel();
    $maestro = $maestro->getBy('id', $id);
    $maestro = $maestro[0];
    if($clave == 0){
        $claves = $materias->getMaterias($id);
    }
    // var_dump($materias);
    require_once '../views/calificar_profesor.php';
?>