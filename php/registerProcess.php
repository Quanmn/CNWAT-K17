<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ket qua</title>
    <style>
    .content-left {
        padding: 20px 40px;
    }

    .content-bottom {
        padding: 20px 40px;
    }
    </style>
</head>

<body>
    <?php
include 'header.php';
include 'right.php';
?>
    <div class="content">
        <div class="content-left">
            <img class="content-img" src="../img/hinh-anh-gai-xinh-de-thuong.jpg" style="height: 200px;" alt="">
        </div>
        <div class="content-bottom">
            <h3>Kết Quả Đăng Ký</h3> <br><br>
            <div>Username: <?php
if (isset($_POST["hoten"])) {echo $_POST["hoten"];}
?></div><br>
     <div>Password: <?php
if (isset($_POST["matkhau"])) {echo $_POST["matkhau"];}
?></div><br>
<div>Gender: <?php
if (isset($_POST["gioitinh"])) {echo $_POST["gioitinh"];}
?></div><br>
            <div>Address: <?php
if (isset($_POST["diachi"])) {echo $_POST["diachi"];}
?></div><br>
<div>Enable Programming Language: <?php
if (isset($_POST['nnlt'])) {
    $nnlt = implode(', ', $_POST['nnlt']);
    echo "$nnlt<br>";}
?></div><br>
<div>Skill: <?php
if (isset($_POST["skill"])) {echo $_POST["skill"];}
?></div><br>
            <div>Note: <?php
if (isset($_POST["ghichu"])) {echo $_POST["ghichu"];}
?></div>
<div>Marriage Status: <?php
if (isset($_POST["status"])) {echo $_POST["status"];} else {
    echo 'Chua ket hon';
}
?></div><br>
        </div>
    </div>
</body>

</html>