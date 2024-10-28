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
    }

}   
