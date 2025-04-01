<?php
class Answer extends Controller
{
    public function __construct()
    {
        // Anyone can see answers but only authenticated users can post answers, so no middleware here 
        // AuthMiddleware::requireAuth();
    }

    public function index($answer_id = null)
    {
        if ($answer_id) {
            // Show specific answer detail page
            $data["answer"] = $this->model('Answer_model')->getAnswerById($answer_id);
            if (!$data["answer"]) {
                // Answer not found, redirect to home
                Flasher::setFlash("Answer", "not found", "danger");
                header("Location: " . BASEURL);
                exit();
            }
            $data["title"] = "Answer Detail";
            $this->view('templates/header', $data);
            $this->view('answer/detail', $data);
            $this->view('templates/footer');
        } else {
            // No answer_id specified, new answer page
            $data["title"] = "Post Your Answer";
            $this->view('templates/header', $data);
            $this->view('answer/index', $data);
            $this->view('templates/footer');
        }
    }
    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $answer_text = $_POST["answer_text"];
            $user_id = $_SESSION["user"]["user_id"];

            $result = $this->model('Answer_model')->addAnswer([
                'answer_text' => $answer_text,
                'user_id' => $user_id
            ]);
            if ($result > 0) {
                Flasher::setFlash("Answer", "posted successfully", "success");
                header("Location: " . BASEURL);
                exit();
            } else {
                Flasher::setFlash("Failed to", "post answer", "danger");
                header("Location: " . BASEURL . "/answer");
                exit();
            }
        }
    }
}