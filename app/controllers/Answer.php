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
            $data["answer"] = $this->model('AnswerRepository')->getAnswerById($answer_id);
            if (!$data["answer"]) {
                // Answer not found, redirect to home
                Flasher::setFlash("Answer", "not found", "danger");
                header("Location: /");
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
        AuthMiddleware::requireAuth();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $answer_text = $_POST["answer_text"];
            $user_id = $_SESSION["user"]["user_id"];

            $result = $this->model('AnswerRepository')->addAnswer([
                'answer_text' => $answer_text,
                'user_id' => $user_id
            ]);
            if ($result > 0) {
                Flasher::setFlash("Answer", "posted successfully", "success");
                header("Location: /");
                exit();
            } else {
                Flasher::setFlash("Failed to", "post answer", "danger");
                header("Location: /answer");
                exit();
            }
        }
    }
    public function delete($answer_id)
    {
        AuthMiddleware::requireAuth();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // only allow the user who created the answer to delete it
            if ($this->model('AnswerRepository')->getAnswerById($answer_id)['user_id'] != $_SESSION['user']['user_id']) {
                Flasher::setFlash("You don't have permission to delete this answer", "", "danger");
                header("Location: /");
                exit();
            } else {
                $result = $this->model('AnswerRepository')->deleteAnswer($answer_id);
                if ($result > 0) {
                    Flasher::setFlash("Answer", "deleted successfully", "success");
                    header("Location: /");
                    exit();
                } else {
                    Flasher::setFlash("Failed to", "delete answer", "danger");
                    header("Location: /");
                    exit();
                }
            }
        }else{
            header("Location: /");
            exit();
        }
    }
    public function update($answer_id)
    {
        AuthMiddleware::requireAuth();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // only allow the user who created the answer to edit it
            if ($this->model('AnswerRepository')->getAnswerById($answer_id)['user_id'] != $_SESSION['user']['user_id']) {
                Flasher::setFlash("You don't have permission to edit this answer", "", "danger");
                header("Location: /");
                exit();
            }
            $answer_text = $_POST["answer_text"];
            $user_id = $_SESSION["user"]["user_id"];
            $result = $this->model('AnswerRepository')->updateAnswer([
                'answer_text' => $answer_text,
                'user_id' => $user_id,
                'answer_id' => $answer_id
            ]);
            if ($result > 0) {
                Flasher::setFlash("Answer", "updated successfully", "success");
                header("Location: /profile");
                exit();
            } else {
                Flasher::setFlash("Failed to", "update answer", "danger");
                header("Location: /answer/edit/$answer_id");
                exit();
            }
        }

    }
    public function edit($answer_id)
    {
        AuthMiddleware::requireAuth();
        $data["answer"] = $this->model('AnswerRepository')->getAnswerById($answer_id);
        if (!$data["answer"]) {
            // Answer not found, redirect to home
            Flasher::setFlash("Answer", "not found", "danger");
            header("Location: /");
            exit();
        }
        $data["title"] = "Edit Answer";
        $this->view('templates/header', $data);
        $this->view('answer/edit', $data);
        $this->view('templates/footer');
    }


}
