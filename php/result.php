<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        .content {
        margin-top: 50px;
        margin-left: 30px;
        }
    </style>
</head>
<body>
<?php
include ('header.php');
?>
<div class="content">
    <div>Họ tên: <?php
if (isset($_POST["a"])) {echo $_POST["a"];}
?></div><br>
<div>Lớp: <?php
if (isset($_POST["b"])) {echo $_POST["b"];}
?></div><br>
<div>Tổng điểm: <?php
if (isset($_POST["c"], $_POST["d"], $_POST["e"])) {echo $_POST["c"] + $_POST["d"] + $_POST["e"];}
?></div>
</div>
</body>
</html>