<?php
// Route Service for routes
namespace App\Services;

class Route{
    private static $routes = [];
    private static $controllerNamespace = 'App\Controllers\\';

    // Add the Route
    public static function add($uri, $controller, $action, $method='GET', $middleware=[]){
        self::$routes[] = [
            'method'=>$method,
            'uri'=>$uri,
            'controller'=>$controller,
            'action'=>$action,
            'middleware'=>$middleware
        ];
    }

    public static function get($uri, $controller, $action, $middleware=[]){
        self::add($uri, $controller, $action, 'GET', $middleware);
    }

    public static function post($uri, $controller, $action, $middleware=[]){
        self::add($uri, $controller, $action, 'POST', $middleware);
    }

    public static function handle(){
        $requestURI = $_SERVER['REQUEST_URI'];       // URL
		$requestMethod = $_SERVER['REQUEST_METHOD']; // GET / POST

        // echo '<pre>';
            // print_r(self::$routes);
            // exit;

		foreach(self::$routes as $route){
            if('/'.$route['uri'] === $requestURI && $route['method'] == $requestMethod){
                
                // echo '<pre>';
                    // print_r($route);
                    // exit;

                    // echo '<pre>';
                    // print_r($middleware);
                // exit;                

				// handle middleware 
				foreach($route['middleware'] as $middleware){
					$middlewareClass = new $middleware;
					$middlewareClass->handle();
				}


				$controllerClass = self::$controllerNamespace.$route['controller'];
				$action = $route['action'];

				$controller = new $controllerClass();
				$controller->$action();
				return;
			}            
        }
        echo '404 - page not found';
    }
}