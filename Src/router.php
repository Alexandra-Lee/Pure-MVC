<?php
require_once("../dispatcher.php");
require_once("../Config/core.php");
require_once("../Controllers/AdminController.php");
require_once("../Controllers/AppController.php");
require_once("../Controllers/ArticlesController.php");
require_once("../Controllers/IndexController.php");
require_once("../Controllers/UserController.php");
require_once("../Controllers/HomeController.php");
require_once("../Controllers/WritersController.php");
require_once("../Controllers/CommentsController.php");
require_once("../Controllers/CreateUserController.php");

Dispatcher::set('', function() {
    HomeController::render('home');
});

Dispatcher::set('home/login', function() {
    HomeController::render('home');
});

Dispatcher::set('index.php', function() {
    HomeController::render('index');
});

Dispatcher::set('admin', function(){
    $sherif = AdminController::getInstance();
    $sherif->loadModel('User');
    $sherif->render('admin');
});

Dispatcher::setAction('admin/createUser', 'createUser', function(){
    $sherif = AdminController::getInstance();
    //$sherif->loadModel('User');
    $sherif->render('createUser');
});

Dispatcher::setAction('admin/displayUser', 'displayUser', function(){
    $sherif = AdminController::getInstance();
    $sherif->render('displayUser');
}); 

Dispatcher::setAction('admin/editUser', 'editUser', function(){
    $sherif = AdminController::getInstance();
    $sherif->render('editUser');
});

Dispatcher::setAction('admin/deleteUser', 'deleteUser', function(){
    $sherif = AdminController::getInstance();
    $sherif->render('deleteUser');
});

Dispatcher::set('writers', function() {
    $writer = WritersController::getInstance();
    $writer->render('writers');
});

Dispatcher::setAction('writers/create', 'need Param', function() {
    $writer = WritersController::getInstance();
    $writer->render('writers');
}); 

Dispatcher::setAction('writers/read', 'need Param', function() {
    $writer = WritersController::getInstance();
    $writer->render('writers');
}); 

Dispatcher::setAction('writers/update', 'need Param', function() {
    $writer = WritersController::getInstance();
    $writer->render('writers');
}); 

Dispatcher::setAction('writers/delete', 'need Param', function() {
    $writer = WritersController::getInstance();
    $writer->render('writers');
}); 

Dispatcher::set('articles', function() {
    $artcontroller = ArticlesController::getInstance();
    $artcontroller->loadModel('article');
    $artcontroller->render('articles');
}); 

Dispatcher::setAction('articles/read', 'needs Param', function() {
    $artcontroller = ArticlesController::getInstance();
    $artcontroller->render('articles');
}); 

Dispatcher::setAction('articles/comments', 'needs Param', function() {
    $artcontroller = ArticlesController::getInstance();
    $artcontroller->render('articles');
});
Dispatcher::call();


 // Jean's work below: 
// <?php

// namespace Src;

// use Controllers\{DefaultController, UserController};

// class Router
// {
//     private $routes = [
//         [
//             'httpMethod' => ['GET'],
//             'route' => '',
//             'controller' => DefaultController::class,
//             'method' => 'index'
//         ],
//         [
//             'httpMethod' => ['POST'],
//             'route' => 'users/index',
//             'controller' => UserController::class,
//             'method' => 'index'
//         ],
//         [
//             'httpMethod' => ['GET', 'POST'],
//             'route' => 'users/see/:id/:username/:gender',
//             'params' => ['id' => '(\d+)', 'username' => '(\S+)', 'gender' => '(1|2)'],
//             'controller' => UserController::class,
//             'method' => 'see'
//         ]
//     ];

//     public function dispatch(string $uri) : void
//     {
//         /*
//         Recover a clean uri
//         */
//         $url = (new Router())->extract($uri);

//         /*
//         Replace human routes to explicit routes
//         */
//         foreach ($this->routes as $key => $route) {
//             if (isset($route['params'])) {
//                 foreach ($route['params'] as $identifier => $rule) {
//                     // Replace identifiers by rules
//                     $this->routes[$key]['route'] = $route['route'] = str_replace(':' . $identifier, $rule, $route['route']);
//                 }
//             }

//             // Replace / by \/ for preg_replace good interpretation
//             $this->routes[$key]['route'] = str_replace('/', '\/', $route['route']);
//         }
        
//         foreach ($this->routes as $route) {
//             // Test if the route match with the url
//             if (preg_match('/^' . $route['route'] . '$/', $url, $matches)) {
//                 // Test if the http method match with the allowed methods
//                 if (in_array($_SERVER['REQUEST_METHOD'], $route['httpMethod'])) {
//                     // Extracts parameters
//                     $params = array_slice($matches, 1);

//                     // Call the good controller and the good method
//                     call_user_func_array([
//                         $route['controller']::getInstance(), 
//                         $route['method']
//                     ], $params);

//                     return;
//                 } else {
//                     // Unauthorized, good route but bad method
//                     echo '401';

//                     return;
//                 }
//             }
//         }   