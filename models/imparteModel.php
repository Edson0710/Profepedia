<?php
class ImparteModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Imparte";
        parent::__construct($this->table);
    }
}
?>
