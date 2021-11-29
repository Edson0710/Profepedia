<?php
class TrabajaModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="trabaja";
        parent::__construct($this->table);
    }

    public function setTrabajo($idPlantel, $idMaestro){
        $this->db->query("INSERT INTO trabaja VALUES (NULL, $idPlantel, $idMaestro)");
        return;
    }
}
?>
