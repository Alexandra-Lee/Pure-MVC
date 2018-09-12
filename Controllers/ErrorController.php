<?php
require_once('AppController.php');
class HomeController extends AppController {
    function __construct() {
        parent::construct();
        echo "This is an error";

        $this->view->msg = "This page doesn't exist.";
        $this->view->render = "error";
    }
}