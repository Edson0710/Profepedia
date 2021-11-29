<?php

require_once("baseModel.php");

class MaestrosModel extends ModeloBase
{
    private $table;

    public function __construct()
    {
        $this->table = "maestros";
        parent::__construct($this->table);
    }

    public function buscarMaestro($pattern)
    {
        if (preg_match('~[0-9]+~', $pattern)) {
            $query = $this->db->query("SELECT * FROM imparte JOIN maestros ON maestros.id = imparte.idmaestro WHERE idmateria LIKE '%$pattern%' GROUP BY idmaestro");

            while ($row = $query->fetch_object()) {
                $array[] = $row;
            }

            return $array;
        } else {
            $query = $this->db->query("SELECT * FROM maestros WHERE nombre LIKE '%$pattern%'");

            while ($row = $query->fetch_object()) {
                $array[] = $row;
            }

            return $array;
        }
    }


    public function agregarMaestro($nombre)
    {
        $result = $this->db->query("SELECT * FROM maestros WHERE nombre = '$nombre'");

        if ($result->num_rows == 0) {
            $this->db->query("INSERT INTO maestros VALUES (NULL, '$nombre')");
            $res = $this->db->query("SELECT id FROM maestros WHERE nombre = '$nombre'");
            $row = $res->fetch_array();
            return $row['id'];
        } else {
            return $res = '0';
        }
    }
}
