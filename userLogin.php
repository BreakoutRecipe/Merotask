<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <div><h3>Login</h3></div>
<div>
    <form action="userControl.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
</div>      
<div><h3>New User <a href="userRegister.php">Register Instead</a></h3></div>

</body>
</html>