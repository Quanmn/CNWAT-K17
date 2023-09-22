<?php
// Hàm xử lý lỗi tùy chỉnh
function customErrorHandler($severity, $message, $file, $line) {
    http_response_code(500); // Thiết lập mã phản hồi lỗi 500 (Lỗi máy chủ)
    include("error.php"); // Chuyển hướng đến trang lỗi tùy chỉnh
    exit;
}

// Thiết lập hàm xử lý lỗi tùy chỉnh
set_error_handler("customErrorHandler");

// Gọi một hàm không tồn tại để tạo ra lỗi
nonExistentFunction();
?>
