<?php

class Conectar{
    private $dbName;
    private $user;
    private $password;
    private $servername;

    public function __construct(){
        $this -> password = "";
        $this -> user = "root";
        $this -> dbName = "profepedia";
        $this -> servername = "localhost";
    }

    public function conexion(){
        $conn = mysqli_connect($this->servername, $this->user, $this->password, $this->dbName);
        return $conn;
    }
}

?>