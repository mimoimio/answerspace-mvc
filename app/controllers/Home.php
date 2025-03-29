<?php
class Home extends Controller{
    public function index($name = "Mior") {
        $data["name"] = $name;
        $data["title"] = "Home Page";
        $data["model"] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}   