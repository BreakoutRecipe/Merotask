<?php 
session_start();
if(!isset($_SESSION["username"])){
    header('Location: userLogin.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1><?php echo $_SESSION["username"] ?> Welcome Your arrival was insane.</h1>
    <h3><a href="tasklist.php">View Tasks</a></h3>
</body>
</html>