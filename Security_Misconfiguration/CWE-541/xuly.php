<?php
session_start();
if (isset($_POST['login'])) {
    include('database.inc');
    
    # lấy value input
    $username = addslashes($_POST['tdn']);
    $password = addslashes($_POST['mk']);
    # Xem bỏ trống không
    if (!$username || !$password) {
        echo "<br><br>Vui lòng nhập đầy đủ username và password. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
    
    $query = "SELECT username, password, role FROM users WHERE username = '$username' ";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

    if (!$result) {
        echo "Lỗi truy vấn SQL: " . mysqli_error($connect);
    } else {
        $password = sha1($password);
        # Lấy mật khẩu trong db ra
        $row = mysqli_fetch_array($result);
        if (!$row) {
            echo "<br><br>Tên đăng nhập không tồn tại.";
        } else if ($password != $row['password']) {
            echo "<br><br>Mật khẩu không đúng. Vui lòng nhập lại.";
        } else {
            
            // Đăng nhập thành công
            $_SESSION['username'] = $username;
            echo "<script> <br><br> Login Success!";
            echo "<br><br>Hello <b>" . $username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
            if($row['role'] === 'admin'){
                header("Location: http://localhost/nguyenminhquan/Security_Misconfiguration/CWE-541/admin.php");
                exit();
            } else{
                header("Location: http://localhost/nguyenminhquan/Security_Misconfiguration/CWE-541/user.php");
                exit();
            }
        }
        mysqli_close($connect);
        die();
    }
}
?>
