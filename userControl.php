<?php
    session_start();

    if ($_POST["submit"] = "login")
    {
        $_SESSION["username"]=$_POST["username"];
        header('Location: index.php');
        exit();
    }elseif($_POST["submit"] = "register"){
        $_SESSION["username"]=$_POST["username"];
        header('Location: index.php');
        exit();
    }

?>