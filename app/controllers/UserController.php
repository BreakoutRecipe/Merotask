<?php 
// require_once '../app/models/general.php';
// require_once '../../config/config.php';

if($_SERVER['REQUEST_URI']=="/userregister" && $_SERVER['REQUEST_METHOD']=="POST"){
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['username']=$username;
    header("Location: /merotasks");
    exit();
}
elseif($_SERVER['REQUEST_URI']=="/userlogin" && $_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['username']=$username;
    header("Location: /merotasks");
    exit();
}
else{
    header("Location: /userlogin");
    exit();
}
