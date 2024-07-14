<?php
$path = dirname(__FILE__);
define('LAYOUTPATH',$path.DIRECTORY_SEPARATOR."layout");
define('MODULESPATH',$path.DIRECTORY_SEPARATOR."modules");
define('CONFIGPATH',$path.DIRECTORY_SEPARATOR."config");
define('COREPATH',$path.DIRECTORY_SEPARATOR."core");
define('LIBPATH',$path.DIRECTORY_SEPARATOR."lib");
require COREPATH.DIRECTORY_SEPARATOR."appload.php";

// Phân tích URL để lấy phần path sau domain
$request_uri = $_SERVER['REQUEST_URI'];


// Xử lý URL
