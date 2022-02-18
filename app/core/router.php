<?php
class Router {

    protected static $url;

    public function __construct($url) {
        //class ile gelen $url`i static url`e elave etmek
        $url  = explode('/', $url)[0];
        self::$url = $url;
    }
    public static function get($url, $callback){
            //class dan gelen url`i get() funkisyasi ile gelen ile qarsilastirmaq
            if(self::$url == $url and gettype($callback) == 'object'){
                call_user_func($callback);
            }
            elseif(self::$url == $url) {
                require_once 'app/controller/' . $url . '.php';

                $class  = explode('/', $callback)[0];
                $class  = new $class;
                $method = explode('/', $callback)[1];
                $class -> $method($url);
            }
        
        }
}