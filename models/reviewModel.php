<?php
class UsuariosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Review";
        parent::__construct($this->table);
    }
}
?>
