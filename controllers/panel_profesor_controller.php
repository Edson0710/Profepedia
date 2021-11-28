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
    $tagTarea = $reviewsModel->getTagTarea($id);
    $tagTarea = $tagTarea[0];
    $tagExamen = $reviewsModel->getTagExamen($id);
    $tagExamen = $tagExamen[0];
    $tagTipo = $reviewsModel->getTagTipo($id);
    $tagTipo = $tagTipo[0];
    $calAsistencia = $reviewsModel->getAsistencia($id);
    $calConocimientos = $reviewsModel->getConocimientos($id);
    $calDificultad = $reviewsModel->getDificultad($id);
    $calGeneral = ($calAsistencia + $calConocimientos)/2;
    $generales = $reviewsModel->getReviews($id);

    require_once '../views/panel_profesor.php';
?>