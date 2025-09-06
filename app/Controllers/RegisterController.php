<?php
namespace App\Controllers;
use App\Models\User;

class RegisterController{
    public function index(){
        // echo 'Register Controller index function';
        // require_once('pages/register.php');
        view('auth.register');
    }

    public function register(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $user = new User();
            $user->name = $_POST['name'];
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
         
            if($user->register()){
                echo 'User registered.';
            }else{
                echo 'Unable to register user.';
            }
        
        }
    }
}