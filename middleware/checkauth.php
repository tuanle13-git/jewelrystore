<?php
//session
function setLoginStatus($index){
    $_SESSION['login'] = array(
        'username' => $index,
        
    );
}



//cookie