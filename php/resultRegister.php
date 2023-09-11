<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ket qua</title>
    <style>
        .content-left{
            padding: 20px 40px;
        }

        .content-right{
            padding: 20px 40px;
        }
    </style>
</head>
<body>
    <?php
include 'header.php';
?>
<div class="content">
    <div class="content-left">
        <img class="content-img" src="../img/hinh-anh-gai-xinh-de-thuong.jpg" style="height: 200px;" alt="">
    </div>
    <div class="content-right">
        <h3>Kết Quả Đăng Ký</h3>
   <div>Họ tên: <?php
if (isset($_POST["hoten"])) {echo $_POST["hoten"];}
?></div><br>
    <div>Địa chỉ: <?php
if (isset($_POST["diachi"])) {echo $_POST["diachi"];}
?></div><br>
    <div>Nghề nghiệp: <?php
if (isset($_POST["nghe"])) {echo $_POST["nghe"];}
?></div><br>
    <div>Ghi chú: <?php
if (isset($_POST["ghichu"])) {echo $_POST["ghichu"];}
?></div>
    </div>
</div>
</body>
</html>