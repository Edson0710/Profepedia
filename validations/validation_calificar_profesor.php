<?php
    require_once('../models/reviewModel.php');    
    require_once('../models/imparteModel.php');    
    $modelo = new ReviewModel();
    $modeloImparte = new ImparteModel();

    $idUsuario = $_POST['idUsuario'];
    $idMaestro = $_POST['idMaestro'];
    $clave = $_POST['claveMateria'];

    $cantTareas = $_POST['cantTareas'];
    $dificultad = $_POST['dificultad'];
    $formaTrabajo = $_POST['formaTrabajo'];
    $calificacionAsistencia = $_POST['calificacionAsistencia'];
    $calificacionConocimientos = $_POST['calificacionConocimientos'];
    $calificacionDificultad = $_POST['calificacionDificultad'];
    $comentarios = $_POST['comentarios'];
    $anonimo = (isset($_POST['anonimo']) ? '1' : '0');

    $res = $modelo->setReviewMateria($cantTareas, $dificultad, $formaTrabajo, $calificacionAsistencia, $calificacionConocimientos, $calificacionDificultad, $comentarios, $anonimo, $idMaestro, $clave, $idUsuario);


    
    $res2 = $modeloImparte->buscarMaestroMateria($idMaestro, $clave);
    if($res2 == 0){
        $res2 = $modeloImparte->setMateriaImpartida($idMaestro, $clave);
    }


    if($res){
        header("Location: ../controllers/panel_profesor_controller.php?id=$idMaestro");
    } else {
        $_SESSION['error'] = "No se pudo insertar el comentario";
        header("Location: ../controllers/panel_profesor_controller.php?id=$idMaestro");
    }
?>