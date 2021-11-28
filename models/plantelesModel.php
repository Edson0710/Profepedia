<?php
class PlantelesModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Planteles";
        parent::__construct($this->table);
    }
}
?>
