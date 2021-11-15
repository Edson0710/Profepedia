<?php
class UsuariosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Maestros";
        parent::__construct($this->table);
    }
}
?>
