<?php
    require_once('../models/maestrosModel.php');
    require_once('../models/reviewModel.php');
    require_once('../models/imparteModel.php');

    $maestroM = new MaestrosModel();
    $reviewM = new ReviewModel();
    $imparteM = new ImparteModel();


    require_once '../views/busqueda.php';
?>