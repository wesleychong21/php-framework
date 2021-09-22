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

  class Request
  {
      public function getPath()
      {
          $path = $_SERVER['REQUEST_URI'] ?? '/';
          $position = strpos($path, '?');
          if($position === false)
          {
              return $path;
          }

          $path = substr($path,0, $position);
         

      }

      public function getMethod()
      {
          return strtolower($_SERVER['REQUEST_METHOD']);
      }

  }