<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .login {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        legend {
            font-weight: bold;
            font-size: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 5px;
            margin-left: -7px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            text-decoration: none;
            display: block;
            margin-top: 10px;
            color: #007bff;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="login.php" method="post" class="login">
    <fieldset>
        <legend>Login</legend>
        <label for="tdn">Username</label>
        <input type="text" name="tdn" id="tdn"> <br><br>
        <label for="mk">Password</label>
        <input type="password" name="mk" id="mk"><br><br>
        <input type="submit" value="Login" name="login">
    </fieldset>
    <a href="forgot.php">Forgot Password</a>
    <a href="register.php">Register</a>
    <?php
    require 'xuly.php';
    ?>
    </form>
</body>
</html>
