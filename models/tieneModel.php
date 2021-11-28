<?php
class TieneModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="tiene";
        parent::__construct($this->table);
    }
}
?>
