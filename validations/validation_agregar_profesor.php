<?php
    require_once('../models/maestrosModel.php');    
    require_once('../models/trabajaModel.php');    
    require_once('../models/imparteModel.php');    
    $modeloMaestro = new MaestrosModel();
    $modeloTrabaja = new TrabajaModel();
    $modeloImparte = new ImparteModel();

    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $centro = $_POST['centro'];

    $res = $modeloMaestro->agregarMaestro($nombre);

    if($res != 0){
        $modeloTrabaja->setTrabajo($centro, $nombre);
        $modeloImparte->setMateriaImpartida($res, $clave);
        //header("Location: ../controllers/panel_profesor_controller.php?id=$res");
    } else{
        $_SESSION['error'] = "Ese profesor ya está registrado";
        header("Location: ../controllers/agregar_profesor_controller.php");
    }
?>