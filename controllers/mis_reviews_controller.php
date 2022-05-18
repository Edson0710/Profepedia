<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require_once('../models/reviewModel.php');
    $reviewsModel = new ReviewModel();
    $generales = $reviewsModel->getByUser('idusuario', $_SESSION['user']->id);
    // var_dump($generales);
    require_once '../views/mis_reviews.php';
?>