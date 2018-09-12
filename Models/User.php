<?php
include_once('../Config/db.php');
class User extends Model {

    public function __construct () {
        echo "USER MODEL IS THERE";
        var_dump($userdata);
    }
    public function __destruct() {}

    /*public function createUser($username, $email, $password, $status, $group) {
        $userdata = dbConnect::getInstance();

        try {
            $query = 'INSERT INTO users (username, email, password, status, group) 
            VALUES ($username, $email, $password, $status, $group)';
            //$result = 
        }              
                if(settings::getDebugLevel() > 1)
                    echo $strQuery . "\n" . "<br>";
    
                $stmt = $bdd->prepare($strQuery);
                $stmt->execute();
                $ret = $bdd->lastInsertId();

        }
    }    
*/
}
?>

<!--
     public function select()
    {
        if(settings::getDebugLevel() > 1)
            echo "Users : select" . "\n" . "<br>";

        $pdo = new db_pdo();
        $bdd = $pdo->getInstance();

        $list_users = array(); 
        
        $db_action = new db_actions();
        $table = "users";
        $where = null;
        $order_by = null;
        $rows = $db_action->my_select_db($bdd, $table, $where, $order_by);
        foreach($rows as $row)
        {   
            $users = new users();
            $users->id =  $row["id"];
            $users->username =  $row["username"];
            $users->password =  $row["password"];
            $users->email =  $row["email"];
            $users->admin =  $row["admin"];
            $users->picture =  $row["picture"];
            $list_users[] = $users;
        }
        return $list_users;
    }

    public function select_by_id($id)
    {
        if(settings::getDebugLevel() > 1)
            echo "Users : select_by_id with ID=" . $id . "\n" . "<br>";
       
        $pdo = new db_pdo();
        $bdd = $pdo->getInstance();
        
        $users = new users();
        $db_action = new db_actions();
        $table = "users";
        $where = sprintf(" id = '%s'", $id);
        $order_by = null;
        $rows = $db_action->my_select_db($bdd, $table, $where, $order_by);
        foreach($rows as $row)
        {   
            if(settings::getDebugLevel() > 1)
                echo "RESULT: " . sprintf("%s - %s - %s - %s - %s - %s",$row["id"], $row["username"], $row["password"], $row["email"], $row["admin"], $row["picture"]) . "\n" ."<br>";
    
            $users->id =  $row["id"];
            $users->username =  $row["username"];
            $users->password =  $row["password"];
            $users->email =  $row["email"];
            $users->admin =  $row["admin"];
            $users->picture =  $row["picture"];
        }

        return $users;
    }

    public function select_by_email($email)
    {
        if(settings::getDebugLevel() > 1)
            echo "Users : select_by_email with email=" . $email . "\n" . "<br>";
        
        $pdo = new db_pdo();
        $bdd = $pdo->getInstance();
        
        $users = new users();
        $db_action = new db_actions();
        $table = "users";
        $where = sprintf(" email = '%s'", $email);
        $order_by = null;
        $rows = $db_action->my_select_db($bdd, $table, $where, $order_by);
        foreach($rows as $row)
        {   
            if(settings::getDebugLevel() > 1)
                echo "RESULT: " . sprintf("%s - %s - %s - %s - %s - %s",$row["id"], $row["username"], $row["password"], $row["email"], $row["admin"], $row["picture"]) . "\n" ."<br>";
    
            $users->id =  $row["id"];
            $users->username =  $row["username"];
            $users->password =  $row["password"];
            $users->email =  $row["email"];
            $users->admin =  $row["admin"];
            $users->picture =  $row["picture"];
        }

        return $users;
    }

    public function insert($username, $password, $email, $admin, $picture=null)
    {
        if(settings::getDebugLevel() > 1)
            echo "Users : insert" . "\n" . "<br>";

        $pdo = new db_pdo();
        $bdd = $pdo->getInstance();

        $ret = -1; //false;
        try
        {
            $strQuery = sprintf("INSERT INTO users (username, password, email, admin, picture) VALUES('%s', '%s', '%s', '%s', '%s');", 
            $username, $password, $email, $admin, $picture); 
           
            if(settings::getDebugLevel() > 1)
                echo $strQuery . "\n" . "<br>";

            $stmt = $bdd->prepare($strQuery);
            $stmt->execute();
            $ret = $bdd->lastInsertId();
        }
        catch(Exception $ex)
        {
            error_log($ex->getMessage(), 3, $ERROR_LOG_FILE);
            throw new Exception("");
        }

        return $ret;
    }

    public function update_by_id($id, $username, $password, $email, $admin, $picture=null)
    {
        if(settings::getDebugLevel() > 1)
            echo "Users : update_by_id with ID=" . $id . "\n" . "<br>";
    
        $ret = false;
        try
        {
            $pdo = new db_pdo();
            $bdd = $pdo->getInstance();

            $strQuery = sprintf("update users set username='%s', password='%s', email='%s', admin='%s', picture='%s' where id='%s';", 
            $username, $password, $email, $admin, $picture, $id);
    
            if(settings::getDebugLevel() > 1)
                echo $strQuery . "\n" . "<br>";
    
            $stmt = $bdd->prepare($strQuery);
            $stmt->execute();
            
            $ret = true;
        }
        catch(Exception $ex)
        {
            throw new Exception("");
        }
    
        return $ret;
    }

    public function delete_by_id($id)
    {
        if(settings::getDebugLevel() > 1)
            echo "Users : delete_by_id with ID=" . $id . "\n" . "<br>";
    
        $pdo = new db_pdo();
        $bdd = $pdo->getInstance();
        $db_action = new db_actions();
        $table = "users";
        $where = sprintf(" id = '%s'", $id);
        $rows = $db_action->my_delete_db($bdd, $table, $where);
    }

    public function delete()
    {
        if(settings::getDebugLevel() > 1)
            echo "Users : delete" . "\n" . "<br>";
    
        $pdo = new db_pdo();
        $bdd = $pdo->getInstance();
        $db_action = new db_actions();
        $table = "users";
        $where = null;
        $rows = $db_action->my_delete_db($bdd, $table, $where);
    }
}
?>   -->