<?php

require_once("baseModel.php");

class MaestrosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="maestros";
        parent::__construct($this->table);
    }

    public function agregarMaestro($nombre){
        $result = $this->db->query("SELECT * FROM maestros WHERE nombre = '$nombre'");

        if($result->num_rows == 0){
            $this->db->query("INSERT INTO maestros VALUES (NULL, '$nombre')");
            $res = $this->db->query("SELECT id FROM maestros WHERE nombre = '$nombre'");
            $row = $res->fetch_array();
            return $row['id'];
        } else {
            return $res = '0';
        }
    }
}
?>
