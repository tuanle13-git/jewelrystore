
<?php 
function load_view($view, $datashow = null) {
    //extract($data);
   
    $path = MODULESPATH.DIRECTORY_SEPARATOR."view".DIRECTORY_SEPARATOR.$view."View.php";
    if (file_exists($path)) require $path; 
        else echo "file not exist3";
    
};

function load_controller ($controller,$action="construct"){
    $path = MODULESPATH.DIRECTORY_SEPARATOR."controller".DIRECTORY_SEPARATOR.$controller."Controller.php";
   
    if (file_exists($path)) {
        require $path; 
        if (method_exists($controller."Controller",$action."Action")) {
            call_user_func([$controller."Controller",$action."Action"]);
           
        }else  echo $controller."Controller".$action."Action";
    } 
        else echo "file not exist1";
        
};
function load_model ($model){
    $path = MODULESPATH.DIRECTORY_SEPARATOR."model".DIRECTORY_SEPARATOR.$model."Model.php";
   
    if (file_exists($path)) {
        require $path; 
    } 
        else echo "file not exist1";
        
};

function get_header (){
    $path = LAYOUTPATH.DIRECTORY_SEPARATOR."header.php";
    if (file_exists($path)) {
        require $path; 
    } 
        else echo "file not exist2";
};

function get_nav (){
    $path = LAYOUTPATH.DIRECTORY_SEPARATOR."nav.php";
    
    if (file_exists($path)) {
        require $path; 
    } 
        else echo "file not exist2";
};
function get_footer (){
    $path = LAYOUTPATH.DIRECTORY_SEPARATOR."footer.php";
    if (file_exists($path)) {
        require $path; 
    } 
        else echo "file not exist2";
};
$page = isset($_GET['page'])?$_GET['page']:'home';
$act = isset($_GET['action'])?$_GET['action']:'construct';

?>

