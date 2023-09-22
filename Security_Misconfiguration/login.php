<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra tên đăng nhập và mật khẩu
    if ($username === "admin" && $password === "admin") {
        // Đăng nhập thành công
        $_SESSION["loggedin"] = true;
        header("Location: admin-panel.php");
        exit;
    } else {
        // Đăng nhập không thành công
        echo "Đăng nhập không thành công. Vui lòng thử lại.";
    }
}
?>
