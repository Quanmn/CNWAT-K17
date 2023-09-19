<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>
    <form action="login1.php" method="post" class="login">
    <fieldset>
        <legend>Login</legend>
        <label for="tdn">Username</label>
        <input type="text" name="tdn" id="tdn"> <br><br>
        <label for="mk">Password</label>
        <input type="password" name="mk" id="mk"><br><br>
    <input type="submit" value="Login" name="login">
    </fieldset>
    <a href="forgot.php">Forgot Password</a>
     <a href="register1.php">Register</a>
     <?php
     require 'xuly.php';
     ?>
    </form>
    

</body>
</html>