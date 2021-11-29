<?php
    require_once('../models/materiasModel.php');
    require_once('../models/imparteModel.php');
    $id = $_GET['id'];

    $materias = new MateriasModel();
    $claves = $materias->getAll();

    require_once '../views/agregar_materia.php';
?>