<?php
// Kiểm tra trạng thái của trang web
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'calculate':
        include 'calculate.php';
        break;
    case 'register':
        include 'register.php';
        break;
    case 'drawtable':
        include 'drawtable.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    case 'sum':
        include 'sum.php';
        break;
    default:
        // Trang mặc định nếu không tìm thấy trang
        include 'home.php';
        break;
}
?>
