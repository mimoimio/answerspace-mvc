<?php
class Controller
{
    public function view($view, $data = [])
    {

        require_once "../app/views/$view.php";
    }
    public function model($model)
    {
        // echo "<pre class='word-wrap'>";
        require_once "../app/models/$model.php";
        // echo "</pre>";
        return new $model;
    }
}
