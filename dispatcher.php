<?php
include_once('../Helpers/Singleton.php');
class Dispatcher {
    use Singleton;

    //  not sure where to put this. maybe in Index (but first test there failed). 
    function __autoload($class_name) {
        if (file_exists('./classes/'.$class_name.'.php')){
            require_once('./Controllers/'.$controller_name . '.php');
        }
    } 
    private static $validRoutes = array();
    private static $validMethod = array();

    public static function set($route, $function) {
        self::$validRoutes[$route] = $function;
    }

    public static function setAction($route, $method, $function){
        self::$validRoutes[$route];
        self::$validMethod[$method] = $function; 
    } 
    public static function callAction(){ 
        //var_dump($_POST['action']);
        if (isset(self::$validMethod[$_POST['action']])) {
            //var_dump($_POST['action']);
              
              self::$validMethod[$_POST['action']](); 
                //var_dump(self::$validMethod);

            }
            else {
                echo '404- not a valid action!!!';
            }
        
    }   
    public static function call()
    { 
        if (isset(self::$validRoutes[$_GET['url']])) {
            self::$validRoutes[$_GET['url']]();
        } else {
            echo '404- not a valid route!!!';
        }
    }
}
