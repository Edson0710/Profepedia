<?php
class ImparteModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="imparte";
        parent::__construct($this->table);
    }
}
?>
