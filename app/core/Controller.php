<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once "../app/views/$view.php";
    }

    public function component($component, $data = [])
    {
        ob_start();
        require "../app/views/templates/$component.php";
        return ob_get_clean();
    }

    public function model($model)
    {
        require_once "../app/models/$model.php";
        return new $model(new Database());
    }

    private function highlightPhrases($text, $phrases)
    {
        // CSS for the gradient effect
        $style = '
            background-image: linear-gradient(45deg, #007bff, #00ff95, #007bff, #00ff95, #007bff);
            background-size: 300%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: bold;
            animation: gradientMove 10s linear infinite;
        ';

        // Escape each phrase for use in a regex pattern
        $escapedPhrases = array_map('preg_quote', $phrases);
        // Build a regex pattern that matches any of the phrases, case-insensitively
        $pattern = '/' . implode('|', $escapedPhrases) . '/i';

        // Use preg_replace_callback to wrap found phrases with a styled span
        return preg_replace_callback($pattern, function ($matches) use ($style) {
            return "<span style=\"$style\">{$matches[0]}</span>";
        }, $text);
    }

    public function rayafication($string)
    {
        // Add the required keyframe animation CSS if not already present
        $animationCSS = "
            <style>
                @keyframes gradientMove {
                    0% { background-position: 0% 50%; }
                    100% { background-position: 300% 50%; }
                }
            </style>
        ";

        $phrases = ['matriye', 'shrmzb', 'selamat hari raya', 'mat ri ye', 'mat ri ya'];
        
        // Return both the animation CSS and the highlighted text
        return $animationCSS . $this->highlightPhrases($string, $phrases);
    }
}
