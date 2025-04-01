<?php
class Authentication extends Controller
{
    public function __construct()
    {
        AuthMiddleware::requireGuest();
    }
    public function index()
    {

        $data["title"] = "Login";
        $this->view('templates/header', $data);
        $this->view('authentication/index', $data);
        $this->view('templates/footer');
    }
    public function register()
    {
        $data["title"] = "Register";
        $this->view('templates/header', $data);
        $this->view('authentication/register', $data);
        $this->view('templates/footer');
    }
    public function registerUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $confirm_password = $_POST["confirm_password"];

            // Basic validation
            if ($password !== $confirm_password) {
                Flasher::setFlash("Passwords", "do not match", "danger");
                header("Location: " . BASEURL . "/authentication/register");
                exit();
            }

            // Check if username already exists
            if ($this->model('User_model')->getUserByUsername($username)) {
                Flasher::setFlash("Username", "already exists", "danger");
                header("Location: " . BASEURL . "/authentication/register");
                exit();
            }

            // Register the user
            $result = $this->model('User_model')->addUser([
                'username' => $username,
                'password' => $password
            ]);

            if ($result > 0) {
                Flasher::setFlash("Registration", "successful", "success");
                header("Location: " . BASEURL . "/authentication");
                exit();
            } else {
                Flasher::setFlash("Registration", "failed", "danger");
                header("Location: " . BASEURL . "/authentication/register");
                exit();
            }
        }
    }
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $user = $this->model('User_model')->getUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION["user"] = $user;
                Flasher::setFlash("Welcome back", $username, "success");
                header("Location: " . BASEURL);
                exit();
            } else {
                Flasher::setFlash("Invalid", "username or password", "danger");
                header("Location: " . BASEURL . "/authentication");
                exit();
            }
        }
    }
}
