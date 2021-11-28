<?php

require_once("baseModel.php");

class MaestrosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="maestros";
        parent::__construct($this->table);
    }
}
?>
