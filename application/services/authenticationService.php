<?php

require_once(PATH_MODELS . '/userModel.php');

class AuthenticationService
{
    private static $service = null;
    private $user_model;

    public function __construct()
    {
        $this->user_model = new UserModel();
    }

    public static function get_instance()
    {
        if (is_null(self::$service)) {
            self::$service = new AuthenticationService();
        }

        return self::$service;
    }

    public function login($email, $password)
    {

    }

    public function logoff()
    {
        
    }

    public static function hash_password($password)
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    public function get_current_user()
    {

    }

    public function is_logged_in()
    {
        
    }
}
