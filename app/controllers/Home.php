<?php
class Home extends Controller{
    public function __construct() {
    }
    public function index() {
        $data["answers"] = $this->model('AnswerRepository')->getAllAnswer();
        $data["title"] = "AnswerSpace";
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    
}   