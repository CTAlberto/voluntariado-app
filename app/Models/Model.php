<?php
namespace App\Models;
use PDO;

class Model
{
    protected $db;
    public function __construct()
    {
        require __DIR__ .  '/../Config/Config.php';
        $this->db = new PDO($server, $user, $pass, $ops);
        if(!$this->db) {
            die('Error al conectar con la base de datos');
        }else {
            //En un futuro se puede cambiar por un log
            echo 'Conexión exitosa';
        }
    }

    public function getAll($table)
    {
        $query = $this->db->prepare('SELECT * FROM ' . $table);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}   
