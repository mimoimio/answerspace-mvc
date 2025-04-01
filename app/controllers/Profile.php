<?php
class Profile extends Controller
{
    public function __construct()
    {
        // Require authentication for all user actions
        AuthMiddleware::requireAuth();
    }

    public function logout()
    {
        session_destroy();
        Flasher::setFlash("Logged", "out successfully", "success");
        header("Location: " . BASEURL . "/");
        exit();
    }

    // Other user-related methods could go here
    public function index()
    {
        $data["title"] = "Profile";
        $data["answers"] = $this->model('Answer_model')->getAnswerByUserId($_SESSION["user"]["user_id"]);
        $data["user"] = $_SESSION["user"];
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function settings()
    {
        // User settings page
    }
}