<?php
define('APP_ROOT', __dir__); //  ( localhost:8000 )
// APP_ROOT = C:\xampp\htdocs\oop_ajay_yadav\XenoPHP 

require_once (APP_ROOT.'/vendor/autoload.php');
//            C:/xampp/htdocs/oop_ajay_yadav/XenoPHP/vendor/autoload.php

// Autoloader for Namedspace Classes
spl_autoload_register(function($class){
    // Track Class Files   (Class's Namespace will be used)
    $classFile = str_replace("\\", DIRECTORY_SEPARATOR, $class.".php" );

    // echo "<h2>".$classFile."</h2>";  // App\Services\Route.php

           // i.e namespace App\Config\Database; for Database class
           // i.e namespace App\Models\User;     for User class                      
        // Both the files Can be access through Namespace

                // $classFile = App\Config\Database.php
                // $classFile = App\Modles\User.php
                // $classFile = App\Services\Route.php 

        // Took The Class's Path
        // $classPath = APP_ROOT.'/app/'.$classFile;
    $classPath = APP_ROOT.'/'.$classFile;

    // echo "<h2>".$classPath."</h2>";
        //C:\xampp\htdocs\oop_ajay_yadav\XenoPHP/App\Services\Route.php 
        //C:\xampp\htdocs\oop_ajay_yadav\XenoPHP/App\Config\Databasee.php 
        //C:\xampp\htdocs\oop_ajay_yadav\XenoPHP/App\Models\User.php 

   if(file_exists($classPath)){
        require_once ($classPath); 
   }
});

   session_start();             // Session should be started for user register or login pages

   use App\Services\Route; 
   $route = new Route();
   
   require_once(APP_ROOT.'/routes/route.php');

   $route->handle();
        

