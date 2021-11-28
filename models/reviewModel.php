<?php

require_once("baseModel.php");

class ReviewModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="review";
        parent::__construct($this->table);
    }

    public function getReviewsMateria($idmateria, $idmaestro){
        $query=$this->db->query("SELECT $this->table.*, usuario.nombre FROM $this->table INNER JOIN usuario ON usuario.id = idusuario WHERE idmateria = '$idmateria' AND idmaestro = $idmaestro");
        $resultSet = array();
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
    
    public function setReviewMateria($cantTareas, $examenes, $formaTrabajo, $calificacionAsistencia, $calificacionConocimientos, $calificacionDificultad, $comentarios, $anonimo, $idMaestro, $clave){
        $query=$this->db->query("INSERT INTO $this->table VALUES(NULL, '$comentarios', $anonimo, $calificacionAsistencia, $calificacionConocimientos, '$formaTrabajo', '$cantTareas', '$examenes', $calificacionDificultad, 0, 1,'$clave', $idMaestro, CURDATE())");

        return $query;
    }
}
?>
