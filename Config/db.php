<?php
include_once('../Helpers/Singleton.php');
class dbConnect extends PDO{
  use Singleton;
  private static $_instance = null;
  private $db;
  public function __construct(){
      $db_info = array(
  				"db_host" => "localhost",
  				"db_port" => "3306",
  				"db_user" => "admin",
  				"db_pass" => "rushmvc",
  			  "db_name" => "MVCRUSH",
  				"db_charset" => "UTF-8");
  			try {
  				$this->db = new PDO("mysql:host=".$db_info['db_host'].';port='.$db_info['db_port'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
  				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
          echo "You are now connected to the Database.";
          //var_dump($this->db);
          $query = "CREATE DATABASE MVC_RUSH";
          $request = $this->db->prepare($query);
          $request->execute();
          //echo "Database created successfully\n";

  			} catch(PDOException $error) {
          echo $error->getMessage();
          $file = "errorInfo";
          file_put_contents($file, $e -> getMessage()."\n",FILE_APPEND);
          echo $query . "<br>" . $e->getMessage();
  			}
  }

  public function getdb(){
    return $this->db;
  } 

  private function __clone(){}
}    

//var_dump (dbConnect::getInstance()->getdb());
//var_dump (dbConnect::getInstance());
 ?>
