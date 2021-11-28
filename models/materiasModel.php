<?php
class MateriasModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="materias";
        parent::__construct($this->table);
    }

}
?>
