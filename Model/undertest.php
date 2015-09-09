<?php

class userModel{
    //put your code here
    
    public static function user_insert($firstname,$last_name)
    {
        $sql="INSERT INTO users(first_name,last_name) "
                . "VALUES('$firstname','$last_name')";
        $db = dbFactory::getFactory($sql);
        $db->start_transaction();
        $results = $db->insert_record_with_inserted_id();
        print_r($results);  
        $db->commit_transaction();
       // $db->rollback_transaction();

    }
    
    public static function selectAllusers()
    {
        return dbFactory::getFactory("SELECT * FROM users")->select_data();
    }
    
    public static function userAuthentication($username,$password)
    {
     $sql ="SELECT * FROM users WHERE username='$username' AND password='$password'";
     $user_data = dbFactory::getFactory($sql)->select_data();    
        if(count($user_data)>0) //Login Success
        {         
            $_SESSION['username']=$user_data[0]['username'];
            $_SESSION['first_name']=$user_data[0]['first_name'];
            $_SESSION['last_name']=$user_data[0]['last_name'];
            $_SESSION['title']=$user_data[0]['title'];
            $_SESSION['password']=$user_data[0]['password'];
            $_SESSION['profile_pic']=$user_data[0]['profile_pic'];
            
            $user_id = $user_data[0]["user_id"];
            $sql = "SELECT user_group_id FROM user_has_groups WHERE user_id='$user_id'";
            $user_group_result = dbFactory::getFactory($sql)->select_data();
            $user_groups = Array();
            foreach($user_group_result as $groups)
            {
                array_push($user_groups, $groups["user_group_id"]);
            }
            $_SESSION["user_groups"]=$user_groups;
            return true;
        }
        else//Login Failed Event
        {    
            session_destroy();
            return false;
        }
    }
    
//    public static function updatePorofilepic($image_name)
//    {
//        $username = $_SESSION['username'];
//        $sql = "UPDATE users SET profile_pic='$image_name' WHERE username='$username'";
//        return dbFactory::getFactory($sql)->update_data();
//    }
}
