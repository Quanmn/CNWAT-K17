<!DOCTYPE html>
<html>
<head>
    <title>Phân trang</title>
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    
    <?php
    // Số sản phẩm trên mỗi trang
    $itemsPerPage = 5;
    $products = array(
        "Sản phẩm 1", "Sản phẩm 2", "Sản phẩm 3", "Sản phẩm 4", "Sản phẩm 5",
        "Sản phẩm 6", "Sản phẩm 7", "Sản phẩm 8", "Sản phẩm 9", "Sản phẩm 10"
    );

    $totalItems = count($products);

    // Số trang
    $totalPages = ceil($totalItems / $itemsPerPage);

    // Trang hiện tại
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

    $startIndex = ($currentPage - 1) * $itemsPerPage;
    $endIndex = $startIndex + $itemsPerPage - 1;

    // Hiển thị sản phẩm trên trang hiện tại
    for ($i = $startIndex; $i <= $endIndex && $i < $totalItems; $i++) {
        echo $products[$i] . "<br>";
    }

    // Tạo các liên kết phân trang
    for ($page = 1; $page <= $totalPages; $page++) {
        echo '<a href="?page=' . $page . '">' . $page . '</a> ';
    }
    ?>
</body>
</html>
