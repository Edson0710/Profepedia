<?php
class UsuariosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="Etiquetas";
        parent::__construct($this->table);
    }
}
?>
