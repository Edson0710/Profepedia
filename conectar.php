<?php

class Conectar{
    private $dbName;
    private $user;
    private $password;
    private $servername;

    public function __construct(){
        $this -> password = "Administrador-2021";
        $this -> user = "u300282865_admin";
        $this -> dbName = "u300282865_profepedia";
        $this -> servername = "localhost";
    }

    public function conexion(){
        $conn = mysqli_connect($this->servername, $this->user, $this->password, $this->dbName);
        return $conn;
    }
}

?>