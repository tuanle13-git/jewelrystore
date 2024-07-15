<?php 
class ajaxController {
    static function loginAction () {
        if (!empty($_POST['username'])) {
           
            $username = ($_POST['username']);
            $password = ($_POST['password']);
            load_model("user");
            $user = new User();
           
            if ($user->checkpassword($username,md5($password))) {
                $_SESSION["username"]=$username;
                $data = ["result"=> '1' ,
                        "username" => $username
                ];
                echo json_encode($data);
                return;
            } else
            $data = ['result'=> '0'];
           
            echo json_encode($data); 
        }
    }
    static function logoutAction () {
        unset($_SESSION['username']);
    }
    
}
