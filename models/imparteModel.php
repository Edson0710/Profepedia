<?php
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

    
}
?>
