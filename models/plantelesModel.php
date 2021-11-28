<?php
class PlantelesModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="planteles";
        parent::__construct($this->table);
    }
}
?>
