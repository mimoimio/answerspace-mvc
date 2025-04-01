<?php
class AuthMiddleware
{
    /**
     * will check if user is authenticated
     * if not, redirect to login
     * @return void
     */
    public static function requireAuth()
    {
        if (!isset($_SESSION["user"])) {
            header("Location: /authentication");
            exit();  // Important: Add exit after redirect
        }
    }
    /**
     * for pages that should only be accessed by non-authenticated users
     * (like login/register pages)\
     * @return void
     */
    public static function requireGuest()
    {
        if (isset($_SESSION["user"])) {
            header("Location: /");
            exit();  // Important: Add exit after redirect
        }
    }

}
