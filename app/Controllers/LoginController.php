<?php
namespace App\Controllers;
use App\Models\User;

class LoginController{
    public function index(){

        // $user = new User();
        // // $data = $user->fetchData('select * from users');  // fetchData
        // $data = $user->fetchSingle('select * from users where id=1');  // fetchData

        // echo '<pre>';print_r($data);
        // exit;


        // echo 'Login Controller index function';
        // require('pages/login.php');
        view('auth.login');
    }

    public function login(){
        $user = new User();
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        
        if($user->login()){
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;
            redirect('dashboard');
            // header('Location: dashboard.php');
            exit();
        }else{
            echo 'Unable to login user.';
        }
    }
}