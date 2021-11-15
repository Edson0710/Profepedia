<?php
class MateriasModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Materias";
        parent::__construct($this->table);
    }
}
?>
