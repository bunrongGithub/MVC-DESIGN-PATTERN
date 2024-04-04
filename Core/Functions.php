<?php
namespace Core;
class Functions {
   protected $request;
   public function __construct(){
      $this->request = $_SERVER['REQUEST_URI'];
   }
   public static function dd($value) {
      echo "<pre>";
      var_dump($value);
      echo "</pre>";
      die();
   }
   public static function request():self {
      return new self();
   }
   public function urlIs($uri):bool{
      return $this->request === $uri;
   }
   public static function routes ($uri , $routes)
   {
       if(array_key_exists($uri , $routes))
       {
           require $routes[$uri];
       }else {
           self::abort();
       }
   }
   public static function abort ( $code = 404 ): string
   {
       http_response_code($code);
       require BestPath . $code . '.php';
       die();
   }
}

