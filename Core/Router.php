<?php
namespace Core;
require_once 'Functions.php';
class Router extends Functions{
    protected static $routes = [];

    public static function add ($uri , $method , $controller)
    {
        static::$routes[] = [
            'uri'=>$uri,
            'method'=>$method,
            'controller'=>$controller,
        ];
    }
    public static function get ($uri , $controller)
    {
        static:: add($uri , 'GET' , $controller);
    }
    public static function post ($uri , $controller)
    {
        static::add($uri , 'POST' , $controller);
    }
    public static function put ($uri , $controller)
    {
        static::add($uri , 'PUT' , $controller);
    }
    public static function delete ($uri , $controller)
    {
        static::add($uri , 'DELETE' , $controller);
    }
    public static function patch ($uri , $controller)
    {
        static::add($uri , 'PATCH' , $controller);
    }
    public static function route ($uri, $method)
    {
        foreach (static::$routes as $route){
            if($route['uri'] === $uri && $route['method'] === strtoupper($method)){
                return require BestPath . $route['controller'];
            }
        }
        return static::abort();
    }
}