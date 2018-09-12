<?php

require_once '../Helpers/Singleton.php';

class AppController {
    use Singleton;

    protected $model = null;
    
    public function loadModel($class_name){
        if (file_exists('../Models/'.$class_name.'.php')){
            require_once('../Models/'.$class_name . '.php');
            $this->model = new $class_name;
        }
    } 

    public function render($viewName = null){
        require_once("../Views/$viewName.php");
    }    

    public function beforeRender(){}
        //This is not neccessary to do.  It is used if you have to keep some variables on a page. 

    public function redirect($param)  //This function needs to be tested. 
    {
        $url = ' ';
        $param = []; 
        $router = Router::getInstance();

        if (isset($_GET['url']))
        {
            $url = explode('/', $_GET['url']);
            $page = $url[0];
            $param = $url[1]; 
        }

        if ($page == $validRoute){
            $router::set($page, function() {
                $page->render('');
            });

        }

        

    }    
    public function __destruct() {

    }
} 