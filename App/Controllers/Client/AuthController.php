<?php


namespace App\Controllers\Client;

use App\Models\User;
use App\Views\Client\Layouts\Footer;
use App\Views\Client\Layouts\Header;
use App\Views\Client\Pages\Auth\Register;
use App\Views\Client\Pages\Auth\Login;


class AuthController
{
    public static function register()
    {
        Header::render();
        Register::render();
        Footer::render();
    }
    public static function registerAction(){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $hash_password=password_hash($password,PASSWORD_DEFAULT);
        $email=$_POST['email'];
        $name=$_POST['name'];

        $data=[
            'username'=> $username,
            'password'=> $hash_password,
            'email'=> $email,
            'name'=> $name
        ];


        $user= new User();
        $result=$user->createUser($data);
        

        if($result){
            var_dump('them ok');
        }else{
            var_dump('them loi');
        }

    }
    public static function login(){
        Header::render();
        Login::render();
        Footer::render();

    }
}
