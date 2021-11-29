<?php
require_once 'baseModel.php';
class UsuariosModel extends ModeloBase{
    private $table;
     
    public function __construct(){
        $this->table="usuario";
        parent::__construct($this->table);
    }

    public function addUser($nombre, $correo, $contrasenia, $contrasenia_rep)
    {
        if($contrasenia != $contrasenia_rep){
            return false;
        }

        $contrasenia = password_hash($contrasenia, PASSWORD_BCRYPT, ['cost'=>4]);

        $query = $this->db->query("INSERT usuario (nombre, correo, contrasenia) VALUES ('$nombre', '$correo', '$contrasenia')");

        return $query;
    }
}
