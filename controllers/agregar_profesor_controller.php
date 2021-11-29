<?php
    require_once('../models/materiasModel.php');
    require_once('../models/plantelesModel.php');

    $materias = new MateriasModel();
    $materias = $materias->getAll();
    $planteles = new PlantelesModel();
    $planteles = $planteles->getAll();

    require_once '../views/agregar_profesor.php';
?>