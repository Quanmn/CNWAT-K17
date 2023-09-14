<?php include ('header.php'); 
include('right.php');
?>
<style>
table {
    margin-left: 40px;
    margin-top: 50px;
}

table,
th,
td {
    border: 2px solid #ccc;
    padding: 1px;
    text-align: center;
}

th {
    background-color: #f9f9f9;
}

.calculate {
    padding: 30px;
}

.result {
    margin-left: 50px;
    margin-top: 50px;
}
</style>

</style>
<table>
    <tr>
        <td></td>
        <td>
            <form class="calculate" method="POST" action="">
                <label for="a">Nhập giá trị thứ nhất:</label>
                <input type="text" id="a" name="a">
        </td>
    </tr>
    <tr>
        <td>

        </td>
        <td>
            <label for="b">Nhập giá trị thứ hai:</label>
            <input type="text" id="b" name="b">
        </td>
    </tr>
    <tr>
        <td>Phép tính:</td>
        <td>
            <input type="radio" id="cong" name="pheptinh" value="+">
            <label for="cong">+</label>

            <input type="radio" id="tru" name="pheptinh" value="-">
            <label for="tru">-</label>

            <input type="radio" id="nhan" name="pheptinh" value="*">
            <label for="nhan">*</label>

            <input type="radio" id="chia" name="pheptinh" value="/">
            <label for="chia">/</label>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="Calculate">
        </td>
    </tr>
</table>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $pheptinh = $_POST["pheptinh"];
    $ketqua = "";

    switch ($pheptinh) {
        case "+":
            $ketqua = $a + $b;
            break;
        case "-":
            $ketqua = $a - $b;
            break;
        case "*":
            $ketqua = $a * $b;
            break;
        case "/":
            if ($b != 0) {
                $ketqua = $a / $b;
            } else {
                $ketqua = "Phép tính không hợp lệ";
            }
            break;
        default:
            $ketqua = "Vui lòng chọn phép tính";
    }

    echo "<div class='result'>Kết quả của phép tính là: " . $ketqua . "</div>";
}
?>