<?php
    require_once('../models/maestrosModel.php');
    require_once('../models/imparteModel.php');
    require_once('../models/materiasModel.php');
    $id = $_GET['id'];
    $clave = $_GET['clave'];

    $maestro = new MaestrosModel();
    $materiasImp = new ImparteModel();
    $materias = new MateriasModel();
    $maestro = $maestro->getBy('id', $id);
    $maestro = $maestro[0];
    if($clave == 0){
        $claves = $materiasImp->getMaterias($id);
        if($claves[0] == NULL){
            $claves = $materias->getAll();
        }
    }
    // var_dump($materias);
    require_once '../views/calificar_profesor.php';
?>