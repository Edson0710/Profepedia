<?php
    require_once('../models/imparteModel.php');    
    $modeloImparte = new ImparteModel();

    $id = $_POST['idMaestro'];
    $clave = $_POST['clave'];
    
    header("Location: ../controllers/panel_profesor_controller.php?id=$id");
    $res = $modeloImparte->buscarMaestroMateria($id, $clave);
    
    if($res == 0){
        $res = $modeloImparte->setMateriaImpartida($id, $clave);
    } else{
        $_SESSION['error'] = "Ese profesor ya tiene esa materia registrada";
        header("Location: ../controllers/agregar_materia_controller.php?id=$id");
    }
?>
