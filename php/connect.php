<?php
        // Tạo kết nối đến cơ sở dữ liệu sử dụng MySQLi
        $connect = new mysqli("localhost", "test","123456@mysql" ,"test" );

        // Kiểm tra kết nối
        if ($connect->connect_error) {
            die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
        }
?>