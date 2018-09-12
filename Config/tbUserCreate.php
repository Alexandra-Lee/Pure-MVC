<?php //I put query in mysql command line :-)
/*
// this file recalls dbconnect, to create users table in database;
require_once ("db.php");

$db = dbConnect::getInstance();
$table = "users";

  $query = "CREATE TABLE $table  
  ( 
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL,
    Hashed_password  VARCHAR( 250 ) NOT NULL,
    Email VARCHAR( 50 ) NOT NULL,
    `GROUP` VARCHAR( 50 ) NOT NULL,
    User_status TINYINT(1),
    Creation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    Last_modification_date DATETIME DEFAULT CURRENT_TIMESTAMP)";
    $call = $db->getdb()->prepare($query);
    $check = $call->execute();
    //var_dump($check);
    echo "Created " . $table ." Table.\n";
*/
 ?>