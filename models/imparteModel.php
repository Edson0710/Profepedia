<?php

require_once("baseModel.php");

class ImparteModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="imparte";
        parent::__construct($this->table);
    }

    public function getMaterias($value){
        $query=$this->db->query("SELECT * FROM $this->table INNER JOIN materias ON materias.clave = imparte.idmateria  WHERE idmaestro='$value'");
 
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }

    public function buscarMaestroMateria($id, $clave){
        $result = $this->db->query("SELECT * FROM imparte WHERE idmaestro = $id AND idmateria = '$clave'");
        return $result->num_rows;
    }

    public function setMateriaImpartida($idMaestro, $claveMateria){
        $this->db->query("INSERT INTO imparte VALUES (NULL, $idMaestro, '$claveMateria')");
        return;
    }
}
?>
