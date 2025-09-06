<?php

function view($file_path, $data=[]){
    // echo $file_path.'<br>';
    // echo DIRECTORY_SEPARATOR.'<br>';

    $path = str_replace("\\",DIRECTORY_SEPARATOR,$file_path);
    // echo $path.'<br>';

    $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
    // echo $path.'<br><br>';

    $file = APP_ROOT.DIRECTORY_SEPARATOR.'pages'.DIRECTORY_SEPARATOR.$path.'.php';
    // print_r($file);

    if(file_exists($file)){
        extract($data);  // Data in Key=Value pair
        return require $file;
    }
        
    throw new Exception('Page not found '.$file);
}

function redirect($url){
    header("Location: $url");
    exit();
}

function pageAdd($file_path){
    include(APP_ROOT.'/pages/'.$file_path);
}