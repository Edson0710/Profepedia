<?php
class EtiquetasModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="etiquetas";
        parent::__construct($this->table);
    }
}
?>
