<?php 
function loginAjax(){  
    if (!empty($_POST['username'])) {
        load_model('user');
        if(user::checkpassword($_POST['username'],$_POST['password'])){
            $dataRespone=array(
                'status' => true
            );
        } else {
            $dataRespone=array(
                'status' => false
            );
            return $dataRespone;
        }

    }
}