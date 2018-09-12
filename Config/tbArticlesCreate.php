<?php /*Didn't use this file --Alexandra 
// this file recalls dbconnect, to create articles table in database;
require_once("db.php");

//$con = new dbConnect();
$db = dbConnect::getInstance();
$table = "articles";

      $query = "CREATE TABLE $table (
          Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          //login_name VARCHAR( 50 ) NOT NULL,  // not sure this belongs here 
          Title  VARCHAR( 250 ) NOT NULL,
          Author VARCHAR(50) NOT NULL,
          description VARCHAR( 300 ) NOT NULL,
          //keywords VARCHAR(50),
          Content LONGTEXT NOT NULL,
         Date_created DATETIME DEFAULT CURRENT_TIMESTAMP,
         Last_modification_date DATETIME DEFAULT CURRENT_TIMESTAMP)";
      $call = $db->getdb()->prepare($query);
      $check = $call->execute();
      var_dump($check);
      echo "Created " . $table ." Table.\n";
*/
?>
