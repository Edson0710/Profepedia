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
    $tagTarea = isset($tagTarea[0]) ? $tagTarea[0] : null;
    $tagExamen = $reviewsModel->getTagExamen($id);
    $tagExamen = isset($tagExamen[0]) ? $tagExamen[0] : null;
    $tagTipo = $reviewsModel->getTagTipo($id);
    $tagTipo = isset($tagTipo[0]) ? $tagTipo[0] : null;
    $calAsistencia = $reviewsModel->getAsistencia($id);
    $calConocimientos = $reviewsModel->getConocimientos($id);
    $calDificultad = $reviewsModel->getDificultad($id);
    $calGeneral = ($calAsistencia + $calConocimientos)/2;
    $generales = $reviewsModel->getReviews($id);

    require_once '../views/panel_profesor.php';
?>