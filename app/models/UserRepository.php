<?php
class UserRepository {
    private $table = 'users';
    private Database $_db;

    // using dependency inversion
    public function __construct(Database $db){
        $this->_db = $db;
    }
    
    public function getAllUser(){
        $this->_db->prepare('SELECT user_id, username, time_created FROM ' . $this->table);
        return $this->_db->resultSet();
    }

    public function getUserById($user_id){
        $this->_db->prepare('SELECT user_id, username, time_created FROM ' . $this->table . ' WHERE user_id=:user_id');
        $this->_db->bind('user_id', $user_id);
        return $this->_db->single();
    }

    public function getUserByUsername($username){
        $this->_db->prepare('SELECT * FROM ' . $this->table . ' WHERE username=:username');
        $this->_db->bind('username', $username);
        return $this->_db->single();
    }

    public function addUser($data) {
        // Hash password before saving
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
        
        $query = "INSERT INTO users (username, password, time_created) 
                 VALUES (:username, :password, NOW())";
        
        $this->_db->prepare($query);
        $this->_db->bind('username', $data['username']);
        $this->_db->bind('password', $hashedPassword);
        $this->_db->execute();

        return $this->_db->rowCount();
    }

    public function verifyPassword($username, $password) {
        $user = $this->getUserByUsername($username);
        
        if ($user) {
            return password_verify($password, $user['password']);
        }
        
        return false;
    }
}
