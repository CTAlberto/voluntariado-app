<?php

namespace App\Models;
require __DIR__ . '/Model.php';
use App\Models\Model;

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



}