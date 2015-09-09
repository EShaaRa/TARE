<?php

class userController {

    //put your code here
//    function SelectAction()
//    {
//        $results = userModel::selectAllusers();
//        print_r($results);
//    }
//    
//    function InsertAction()
//    {
//        $results = userModel::user_insert('john', 'adam');
//        die;
//    }
//    function profilepicuploadAction()
//    {
//        $file_name = $_FILES['profile_pic']['name'];
//        $new_file_name = session_id().'_'.$file_name;
//        move_uploaded_file($_FILES['profile_pic']['tmp_name'], 'images/profile_pic/'.$new_file_name);
//        /*Update the profile pic to db*/
//        userModel::updatePorofilepic($new_file_name);
//         $_SESSION['profile_pic'] = $new_file_name;
//        echo json_encode(array("image_name"=>$new_file_name));
//    }-->


    function LoginAction() {
        $GLOBALS['title'] = "TARE Login";

        $cookie_data = explode(',', $_COOKIE['TareControl']);
        $username = $cookie_data[0];
        $password = $cookie_data[1];
        $login = $cookie_data[2];
        $user_result = userModel::userAuthentication($username, $password, $login);
        if ($user_result == true) {
            header("location:../dashboard/index");
        } else {
            if (isset($_COOKIE['TareControl'])) {
                session_destroy();
                setcookie("TareControl", "", time() - 3600);
                header("location:../user/login");
            }
        }
    }

    function AuthenticateAction() {
        $username = addslashes($_REQUEST['username']);
        $password = sha1($_REQUEST['password']);
        $isRememberme = $_REQUEST['rememberme'];
        $user_result = userModel::userAuthentication($username, $password,$login);
        if ($user_result == true && $isRememberme == "true") {
            $credentials = $username . ',' . $password;
            setcookie("TareControl", $credentials, time() + 3600);
        }
        echo json_encode(array("status" => $user_result));
    }

    function LogoutAction() {
        session_destroy();
        setcookie("TareControl", "", time() - 3600);
        echo json_encode(array("status" => true));
    }

    function RegisterAction() {
        
    }

    function EditUserAction() {
        
    }

    function ApproveReviewerRegAction() {
        
    }

}
