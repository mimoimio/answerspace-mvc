<?php
class About extends Controller
{
    public function index($name = "Mior", $job = "DevOps", $age = 20)
    {
        $data["name"] = $name;
        $data["job"] = $job;
        $data["age"] = $age;
        $data["title"] = "About Page";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data["title"] = "My Pages";
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}
