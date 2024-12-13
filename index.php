<?php 
define('ROOT','http://localhost/batch7am/event/');
require_once "helper/DB.php";
require_once "helper/redirect.php";
$module="booking";
$file="index";
$url=$_GET['url']??null;
if($url){
    $url=explode('/',rtrim($url,'/'));
    $module=$url[0];
    $file=$url[1]??$file;
}
$path="modules/$module/$file.php";
if(file_exists($path)){
    include_once "header.php";
    include_once $path;
    include_once "footer.php";
    
}else{
    redirect('404.php');  
}


?>
