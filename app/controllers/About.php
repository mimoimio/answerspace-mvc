<?php
class About extends Controller
{
    public function __construct(){
        // AuthMiddleware::requireAuth();
    }
    public function index()
    {
        $data["title"] = "About Page";
        $data["users"] = $this->model('User_model')->getAllUser();
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
