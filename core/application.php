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

 class Application
 {
    public Router $router;    
    public Request $request;
   // public Response $response;
     
     public function __construct()
     {
         $this->request = new Request();
         //$this->response = new Response();
         $this->router = new Router($this->request);
         
     }

     public function run()
     {
         $this->router->resolve();
     }
 }