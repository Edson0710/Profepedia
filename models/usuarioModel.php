<?php
class UsuariosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="usuario";
        parent::__construct($this->table);
    }
}
?>
