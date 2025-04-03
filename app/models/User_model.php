<?php
class User_model {
    private $table = 'users';
    private $db;

    public function __construct(){ 
        $this->db = new Database();
    }
    
    public function getAllUser(){
        $this->db->prepare('SELECT user_id, username, time_created FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($user_id){
        $this->db->prepare('SELECT user_id, username, time_created FROM ' . $this->table . ' WHERE user_id=:user_id');
        $this->db->bind('user_id', $user_id);
        return $this->db->single();
    }

    public function getUserByUsername($username){
        $this->db->prepare('SELECT * FROM ' . $this->table . ' WHERE username=:username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }

    public function addUser($data) {
        // Hash password before saving
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        
        $query = "INSERT INTO users (username, password, time_created) 
                 VALUES (:username, :password, NOW())";
        
        $this->db->prepare($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $hashedPassword);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function verifyPassword($username, $password) {
        $user = $this->getUserByUsername($username);
        
        if ($user) {
            return password_verify($password, $user['password']);
        }
        
        return false;
    }
}
