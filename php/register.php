<?php
include('header.php');
include('right.php')
;?>
<style>
.form {
    padding: 20px 50px;
    margin-left: 50px;
    margin-top: 5px;
}

.username{
    margin-left: 100px;
}
.password{
    margin-left: 102px;
}
.male{
    margin-left: 120px; 
}
.fermale{
    margin-left: 176px; 
}

.address{
    margin-left: 110px;
}
.nnlt{
    margin-left: 170px;
    margin-top: -50px;
}
.skill{
    margin-left: 170px;
    margin-top: -30px;
}
.note{
    margin-left: 170px;
    margin-top: -20px;
}
.status{
    margin-left: 60px;
    margin-top: -20px; 
}
.reset{
    margin-left: 30px;
}

</style>
<div class="form">
    <h2> Form Đăng ký</h2> <br> <br>
    <form action="registerProcess.php" method="post">
        Username:
        <input type="text" name="hoten" class="username"/><br /><br>
        Password:
        <input type="password" name="matkhau" id="" class="password"> <br><br>
        Gender:
        <input type="radio" name="gioitinh" id="" class="male" value="Male">Male <br> <br>
        <input type="radio" name="gioitinh" id="" class="fermale" value="Fermale">Fermale <br><br>
        Address:
        <select name="diachi" class="address">
            <option value="Hà Nội">Hà Nội</option>
            <option value="TP. HCM">TP. HCM</option>
            <option value="Huế">Huế</option>
            <option value="Đà Nẵng">Đà Nẵng</option>
        </select>
        <br><br>
        Enable Programing <br>Language: <br><br>
        <div class="nnlt"><input type="checkbox" name="nnlt[]" id="" value="PHP">PHP,
        <input type="checkbox" name="nnlt[]" id="" value="C#">C#,
        <input type="checkbox" name="nnlt[]" id="" value="Java">Java,
        <input type="checkbox" name="nnlt[]" id="" value="C++">C++</div>
        <br><br>
        Skill:
        <div class="skill"><input type="radio" name="skill" value="Normal">Normal <br> <br>
        <input type="radio" name="skill" value="Good">Good <br><br>
        <input type="radio" name="skill" value="Verygood">Verygood <br> <br>
        <input type="radio" name="skill" value="Excellent">Excellent <br><br></div>
        Note: <br>
        <textarea name="ghichu" id="" cols="50" rows="5" class="note"></textarea><br /><br>
        Marriage Status:
        <input type="checkbox" class="status" name="status" value="Da ket hon"> <br><br>
        <input type="submit" value="Register" class="register"/>
        <input type="reset" value="Reset"  class="reset"/>
    </form>
</div>