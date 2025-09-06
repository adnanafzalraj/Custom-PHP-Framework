<?php
namespace App\Controllers;

class DashboardController{
    public function index(){

        // Passing Data From Controller to View
        // i.e Passing $posts data to dashboard
        $posts = [
            ['id'=>1, 'title'=>'Post Title 1', 'content'=>'Content 1'],
            ['id'=>2, 'title'=>'Post Title 2', 'content'=>'Content 2'],
            ['id'=>3, 'title'=>'Post Title 3', 'content'=>'Content 3']
        ];

        // echo 'Dashboard Controller index function';
        // require_once('pages/dashboard.php');
        view('dashboard', [         // Multiple Data being passed here
            'user_posts'=>$posts,
            'name'=> $_SESSION['user_name']
        ]);
    }

    public function logout(){   
        $_SESSION = []; // session_reset();
        session_destroy(); 
        redirect('login');
    }
}