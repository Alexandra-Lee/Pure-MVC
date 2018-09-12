<?php
include_once("db.php");
include_once('../dispatcher.php');
include_once('../Controllers/AdminController.php');
include_once('../Controllers/AppController.php');
include_once('../Controllers/ArticlesController.php');
include_once('../Controllers/CommentsController.php');
include_once('../Controllers/CreateUserController.php');
include_once('../Controllers/HomeController.php');
include_once('../Controllers/IndexController.php');
include_once('../Controllers/UserController.php');
include_once('../Controllers/WritersController.php');

$data = dbConnect::getInstance()->getdb(); // Call of static method getInstance from dbConnect Class;
$dispatcher = Dispatcher::getInstance();
$sherif = AdminController::getInstance();
$artcontroller = ArticlesController::getInstance();
$comments = CommentsController::getInstance();
$createUser = CreateUserController::getInstance();
$maison = HomeController::getInstance();
$index = IndexController::getInstance();
$user = UserController::getInstance();
$writer = WritersController::getInstance();