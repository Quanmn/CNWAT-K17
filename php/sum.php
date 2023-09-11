<?php
include('header.php');
?>
<style>
    .sum{
        margin-top: 50px;
        margin-left: 30px;
    }
</style>
<form method="POST" action="result.php" class="sum">
        <label for="a">Họ Tên:</label><br>
        <input type="text" id="a" name="a">
        <br><br>
        <label for="b">Lớp:</label><br>
        <input type="text" id="b" name="b"><br><br>
        <label for="c">Điểm 1:</label><br>
        <input type="number" id="c" name="c"><br><br>
        <label for="d">Điểm 2:</label><br>
        <input type="number" id="d" name="d"><br><br>
        <label for="e">Điểm 3:</label><br>
        <input type="number" id="e" name="e"><br><br>
        <input type="submit" value="OK">
        <input type="reset" value="Cancel">
    </form>
