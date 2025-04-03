<?php
class Answer_model
{
    private $table = 'answers';
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllAnswer()
    {
        $this->db->prepare('SELECT a.answer_id, a.answer_text, a.time_created, a.user_id, u.username 
                         FROM ' . $this->table . ' a 
                         JOIN users u ON a.user_id = u.user_id
                         ORDER BY a.time_created DESC');
        return $this->db->resultSet();
    }

    public function getAnswerById($answer_id)
    {
        $this->db->prepare('SELECT a.answer_id, a.answer_text, a.time_created, a.user_id, u.username 
                         FROM ' . $this->table . ' a 
                         JOIN users u ON a.user_id = u.user_id 
                         WHERE a.answer_id=:answer_id
                         ORDER BY a.time_created DESC');
        $this->db->bind('answer_id', $answer_id);
        return $this->db->single();
    }

    public function getAnswerByUserId($user_id)
    {
        $this->db->prepare('SELECT a.answer_id, a.answer_text, a.time_created, a.user_id, u.username 
                         FROM ' . $this->table . ' a 
                         JOIN users u ON a.user_id = u.user_id 
                         WHERE a.user_id=:user_id
                         ORDER BY a.time_created DESC');
        $this->db->bind('user_id', $user_id);
        return $this->db->resultSet();
    }

    public function addAnswer($data)
    {
        // Sanitize user input
        $answer_text = htmlspecialchars(strip_tags($data['answer_text']));

        $query = "INSERT INTO answers (answer_text, user_id) 
                 VALUES (:answer_text, :user_id)";
      
        $this->db->query($query);
        $this->db->bind('answer_text', $answer_text );
        $this->db->bind('user_id', $data['user_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function deleteAnswer($answer_id){
        $query = 'DELETE FROM '. $this->table .' WHERE answer_id = :answer_id';
        $this->db->prepare($query);
        $this->db->bind('answer_id', $answer_id);
        $this->db->execute();

        return $this->db->rowCount();
    }
    public function updateAnswer($data){
        $query = "UPDATE answers SET answer_text = :answer_text WHERE answer_id = :answer_id";
        $this->db->prepare($query);
        $this->db->bind('answer_text', $data['answer_text']);
        $this->db->bind('answer_id', $data['answer_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
