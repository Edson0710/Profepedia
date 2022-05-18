<?php

require_once("baseModel.php");

class ReviewModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="review";
        parent::__construct($this->table);
    }

    public function getReviews($idmaestro){
        $query=$this->db->query("SELECT $this->table.*, usuario.nombre FROM $this->table INNER JOIN usuario ON usuario.id = idusuario WHERE idmaestro = $idmaestro");
        $resultSet = array();
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }

    public function getReviewsMateria($idmateria, $idmaestro){
        $query=$this->db->query("SELECT $this->table.*, usuario.nombre FROM $this->table INNER JOIN usuario ON usuario.id = idusuario WHERE idmateria = '$idmateria' AND idmaestro = $idmaestro");
        $resultSet = array();
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
    
    public function setReviewMateria($cantTareas, $examenes, $formaTrabajo, $calificacionAsistencia, $calificacionConocimientos, $calificacionDificultad, $comentarios, $anonimo, $idMaestro, $clave, $idUsuario){
        $query=$this->db->query("INSERT INTO $this->table VALUES(NULL, '$comentarios', $anonimo, $calificacionAsistencia, $calificacionConocimientos, '$formaTrabajo', '$cantTareas', '$examenes', $calificacionDificultad, 0, $idUsuario,'$clave', $idMaestro, CURDATE())");
        return $query;
    }

    public function getTagTarea($idmaestro){
        $query=$this->db->query("SELECT tareas, COUNT(tareas) AS cont FROM $this->table WHERE idmaestro = $idmaestro GROUP BY tareas ORDER BY cont DESC LIMIT 1");
        $resultSet = array();
        if($query){
            while($row = $query->fetch_object()) {
            $resultSet[]=$row;
            }
            return $resultSet;
        }
        else{
            return false;
        }
    }

    public function getTagExamen($idmaestro){
        $query=$this->db->query("SELECT examenes, COUNT(examenes) AS cont FROM $this->table WHERE idmaestro = $idmaestro GROUP BY examenes ORDER BY cont DESC LIMIT 1");
        $resultSet = array();
        if($query){
            while($row = $query->fetch_object()) {
            $resultSet[]=$row;
            }
            return $resultSet;
        }
        else{
            return false;
        }
    }

    public function getTagTipo($idmaestro){
        $query=$this->db->query("SELECT tipo, COUNT(tipo) AS cont FROM $this->table WHERE idmaestro = $idmaestro GROUP BY tipo ORDER BY cont DESC LIMIT 1");
        $resultSet = array();
        if($query){
            while($row = $query->fetch_object()) {
            $resultSet[]=$row;
            }
            return $resultSet;
        }
        else{
            return false;
        }
    }

    public function getAsistencia($idmaestro){
        $query=$this->db->query("SELECT idmaestro, AVG(asistencia) AS cal from $this->table WHERE idmaestro = $idmaestro");
        $resultSet = array();
        if($query){
            while($row = $query->fetch_object()) {
               $resultSet[]=$row;
            }
            return $resultSet[0]->cal;
        }
        else{
            return 0;
        }
        
    }

    public function getConocimientos($idmaestro){
        $query=$this->db->query("SELECT idmaestro, AVG(conocimientos) AS cal from $this->table WHERE idmaestro = $idmaestro");
        $resultSet = array();
        if($query){
            while($row = $query->fetch_object()) {
            $resultSet[]=$row;
            }
            return $resultSet[0]->cal;
        }
        else{
            return 0;
        }
    }

    public function getDificultad($idmaestro){
        $query=$this->db->query("SELECT idmaestro, AVG(dificultad) AS cal from $this->table WHERE idmaestro = $idmaestro");
        $resultSet = array();
        if($query){
            while($row = $query->fetch_object()) {
            $resultSet[]=$row;
            }
            return $resultSet[0]->cal;
        }
        else{
            return 0;
        }
    }

    public function updateVotos($id, $votos){
        $query=$this->db->query("UPDATE $this->table SET votos = $votos WHERE id = $id");
        return $query;
    }

    public function getByUser($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table INNER JOIN maestros ON maestros.id = review.idmaestro WHERE $column='$value'");
 
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
}
?>
