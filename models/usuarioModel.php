<?php
class UsuariosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Usuario";
        parent::__construct($this->table);
    }
}
?>
