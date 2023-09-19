<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="register1.php" method="post" class="dangky">
    <fieldset>
        <legend>Signin Member</legend>
        <label for="tdn">Username:</label>
        <input type="text" id="tdn" name="username" required> <br><br>
        <label for="mk">Password:</label>
        <input type="password" name="mk" id="mk" required> <br><br>
        <label for="mk">Confirm Password: </label>
        <input type="password" name="mk1" id="mk1" required> <br><br>
        <label for="phone">Number Phone:</label>
        <input type="text" name="phone" id="" required> <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="" required><br><br>
        <label for="quocTich">Quốc Tịch:</label>
        <input type="text" name="quocTich" id="quocTich" required><br><br>

        <input type="submit" value="Register" name="dangky">
    </fieldset>

    </form>
</body>
</html>

<?php
if (isset($_POST['dangky'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['mk']);
    $password1 = trim($_POST['mk1']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $quocTich = trim($_POST['quocTich']);
    
    #Connect db
    include('connect.php');
    
    $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo '<script language="javascript"> alert("Bị trùng tên hoặc chưa nhập tên"); window.location = "register1.php";</script>';
        die();
    } else {
        if ($password !== $password1) {
            echo '<script language="javascript"> alert("Mật khẩu không trùng khớp"); window.location = "register1.php";</script>';
            die();
        }

        $password = sha1($password);
        $sql = "INSERT INTO users (id, username, password, email, phone, quocTich) VALUES ('', '$username','$password','$email','$phone', '$quocTich')";
        echo '<script language="javascript"> alert("Đăng ký thành công"); window.location = "login1.php";</script>';
        
        if(mysqli_query($connect, $sql)) {
            echo "Username: " . $username . "<br>";
            echo "Password: " . $_POST['mk'] . "<br>";
            echo "Email: " . $_POST['email'] . "<br>";
            echo "Phone: " . $_POST['phone'] . "<br>";
            echo "Quốc Tịch: " . $_POST['quocTich'] . "<br>";
        } else {
            echo '<script language="javascript"> alert("Có lỗi trong quá trình xử lý!"); window.location = "register1.php";</script>';
        }
    }
}
?>
