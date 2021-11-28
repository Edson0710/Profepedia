<?php
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
    
}
?>
