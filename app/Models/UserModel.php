<?php

namespace App\Models;
require __DIR__ . '/Model.php';
use App\Models\Model;
use PDO;
class UserModel extends Model
{
    protected $table = 'users';
    protected $id;
    protected $name;
    protected $email;
    protected $password;
    protected $role;
    protected $created_at;
    protected $updated_at;


    public function __construct()
    {
        parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getEmail() {
        return $this->email;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function setPassword($password) {
        $this->password = $password;
    }
    
    public function getRole() {
        return $this->role;
    }
    
    public function setRole($role) {
        $this->role = $role;
    }
    
    public function getCreatedAt() {
        return $this->created_at;
    }
    
    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }
    
    public function getUpdatedAt() {
        return $this->updated_at;
    }
    
    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function getUserByEmail($email){
        $sql = "SELECT * FROM users WHERE (email = :email)" ;
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();
        if($query->rowCount() > 0){
            $user = new UserModel();
            $reg = $query->fetch();
            $user->setId($reg['user_id']);
            $user->setName($reg['name']);
            $user->setEmail($reg['email']);
            $user->setPassword($reg['password']);
            $user->setRole($reg['role_id']);
            $user->setCreatedAt($reg['created_at']);
            
            
            return $user;
        }else{
            return false;
        }
    }

    public function exist($word){
        $sql = "SELECT * FROM users WHERE (email = :word OR name = :word)";
        $query = $this->db->prepare($sql);
        $query->bindParam(':word', $word, PDO::PARAM_STR);
        $query->execute();
        if($query->rowCount() > 0){
            // Devuelve true si existe
            return true;
        }else{
            // Devuelve false si no existe
            return false;
        }
    }

        public function save(){
            $hashedPassword = password_hash($this->password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (name, email, password, role_id) VALUES (:name, :email, :password, :role)";
            $query = $this->db->prepare($sql);
            $query->bindParam(':name', $this->name, PDO::PARAM_STR);
            $query->bindParam(':email', $this->email, PDO::PARAM_STR);
            $query->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
            $query->bindParam(':role', $this->role, PDO::PARAM_STR);
            $query->execute();
            if($query->rowCount() > 0){
                return true;
            }else{
                return false;
            }
        }

}