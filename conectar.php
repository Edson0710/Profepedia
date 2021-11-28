<?php

class Conectar{
    private $dbName;
    private $user;
    private $password;
    private $servername;

    public function __construct(){
        $this -> password = "Administrador-2021";
        $this -> user = "id18021049_admin";
        $this -> dbName = "id18021049_profepedia";
        $this -> servername = "localhost";
    }

    public function conexion(){
        $conn = mysqli_connect($this->servername, $this->user, $this->password, $this->dbName);
    }
}

?>