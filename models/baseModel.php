<?php



class ModeloBase{
    private $table;
    protected $db;
    private $conectar;
    private $count = 3;
 
    public function __construct($table) {
        $this->table=(string) $table;
        count(explode('/',$_SERVER['REQUEST_URI'])) > $this->count ? require_once '../conectar.php' : require_once 'conectar.php';
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion();
    }
     
    public function getConetar(){
        return $this->conectar;
    }
     
    public function db(){
        return $this->db;
    }
     
    public function getAll(){
        $query=$this->db->query("SELECT * FROM $this->table");
        $array=array();
        while($row=$query->fetch_object()){
            $array[]=$row;
        }

        return $array;
    }
     
    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
 
        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }
     
    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }
     
    public function ejecutarSql($query){
        $query=$this->db()->query($query);
        if($query==true){
            if($query->num_rows>1){
                while($row = $query->fetch_object()) {
                   $resultSet[]=$row;
                }
            }elseif($query->num_rows==1){
                if($row = $query->fetch_object()) {
                    $resultSet=$row;
                }
            }else{
                $resultSet=true;
            }
        }else{
            $resultSet=false;
        }
         
        return $resultSet;
    }  
}
?>