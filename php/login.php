<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<style>
.login {
    margin-left: 100px;
    margin-top: 30px;
}
</style>
<?php
include('header.php');
include('right.php');
?>
<body>
<?php
if(isset($_POST["login"])) {
    if(empty($_POST['username'])) {
        echo "Please enter your username!<br>";
    } else {
        $u = $_POST['username'];
    }
    if(empty($_POST['password'])) {
        echo "Please enter your password!<br>";
    } else {
        $p = $_POST['password'];
    }

    if(isset($u) && isset($p)) {
        $servername = "localhost";
        $username = "test";
        $password = "123456@mysql";
        $dbname = "test";

        // Tạo kết nối đến cơ sở dữ liệu sử dụng MySQLi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Kiểm tra kết nối
        if ($conn->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users where username='".$u."' and password='".$p."'";
        $query = $conn->query($sql);

        if ($query->num_rows == 0) {
            echo '<script>alert("No username or password is not correct, please try again");</script>';
        } else {
            
            session_start();

            $_SESSION['username'] = $u;
            $_SESSION['password'] = $p;

            setcookie('username', $u, time() + 3600, '/');
            setcookie('password', $p, time() + 3600, '/');

            echo '<script>
                    alert("Login successful!");
                    window.location.href = "index.php"; 
                  </script>';
        }

        // Đóng kết nối
        $conn->close();
    }
} else {
    
    if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        $u = $_COOKIE['username'];
        $p = $_COOKIE['password'];
        echo '
            <script>
                document.querySelector(\'input[name="username"]\').value = "'.$u.'";
                document.querySelector(\'input[name="password"]\').value = "'.$p.'";
            </script>
        ';
    }
}
?>
    <form action="" method="post" class="login">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br> <br>
        <input type="submit" name="login">
    </form>
</body>
</html>
