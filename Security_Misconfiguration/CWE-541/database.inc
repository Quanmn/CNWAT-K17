<?php
$db_username = getenv('DB_USERNAME');
$db_password = getenv('DB_PASSWORD');
        // Tạo kết nối đến cơ sở dữ liệu sử dụng MySQLi
        $connect = new mysqli("localhost", $db_username,$db_password ,"test" );
        // Không bảo mật 
        // $connect = new mysqli("localhost", "test","123456@mysql" ,"test" );

        // Kiểm tra kết nối
        if ($connect->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }
?>

