<?php
include('header.php');
?>
<style>
    .form {
    padding: 20px 50px;
}
</style>
<div class="form">
<h2> Form Đăng ký</h2> <br> <br> 
<form action="resultregister.php" method="post" >
Họ và tên <br>
<input type="text" name="hoten" /><br /><br>
Địa chỉ <br>
<input type="text" name="diachi" /><br /><br>
Nghề <br>
<input type="text" name="nghe" /><br /><br>
Ghi chú <br>
<textarea name="ghichu" id="" cols="30" rows="10"></textarea><br /><br>
<input type="submit" value="Gửi" />
<input type="reset" value="Xoá" />
</form>
</div>
