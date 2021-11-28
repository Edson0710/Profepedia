<?php
class TrabajaModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="trabaja";
        parent::__construct($this->table);
    }
}
?>
