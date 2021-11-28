<?php
    require_once('../models/maestrosModel.php');
    require_once('../models/imparteModel.php');
    require_once('../models/reviewModel.php');
    $id = $_GET['id'];
    $maestro = new MaestrosModel();
    $materias = new ImparteModel();
    $reviewsModel = new ReviewModel();
    $maestro = $maestro->getBy('id', $id);
    $maestro = $maestro[0];
    $materias = $materias->getMaterias($id);
    // var_dump($materias);

    require_once '../views/panel_profesor.php';
?>