<?php   

/**
 * User: Wesley
 * Date: 22 Sept 2021
 * 
 */

 namespace app\core;

 /**
  * Class Application
  *
  * @author Wesley Chong <wesleychong21@gmail.com>
  * @package app\core
  */

 class Router
 {
    public Request $request;    
    protected array $routes = [];

    
    public function __construct(\app\core\Request $request)
    {
        $this->request = $request;
    }
    

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        
        if($callback === false)
        {
            echo "NOT FOUND";
            exit;
        }

         echo '<pre>';
         var_dump($path); 
         echo '</pre>';
         exit;

    }
 }
     