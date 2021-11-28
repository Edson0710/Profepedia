<?php
class ReviewModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="review";
        parent::__construct($this->table);
    }
}
?>
