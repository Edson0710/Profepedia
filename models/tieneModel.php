<?php
class UsuariosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Tiene";
        parent::__construct($this->table);
    }
}
?>
