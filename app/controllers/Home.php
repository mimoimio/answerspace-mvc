<?php
class Home extends Controller{
    public function __construct() {
    }
    public function index() {
        $data["answers"] = $this->model('Answer_model')->getAllAnswer();
        $data["title"] = "Home Page";
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    
}   