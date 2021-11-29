<?php
    require_once('../models/maestrosModel.php');
    require_once('../models/reviewModel.php');

    $maestroM = new MaestrosModel();
    $reviewM = new ReviewModel();


    require_once '../views/busqueda.php';
?>