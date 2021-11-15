<?php
class UsuariosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Trabaja";
        parent::__construct($this->table);
    }
}
?>
