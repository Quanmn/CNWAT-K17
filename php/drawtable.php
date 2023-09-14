<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include('header.php');
    include('right.php');
    ?>
    <style>
    table {
        border-collapse: collapse;
        margin-top: 50px;
        margin-left: 30px;
    }

    table,
    th,
    td {
        border: 1px solid #ccc;
        padding: 1px;
        text-align: center;
    }

    .drawtable {
        margin-top: 40px;
        margin-left: 30px;
    }
    </style>
</head>

<body>
    <form method="POST" action="" class="drawtable">
        <label for="rows">Nhập số dòng:</label>
        <input type="number" id="rows" name="rows" required>
        <br><br>
        <label for="columns">Nhập số cột:</label>
        <input type="number" id="columns" name="columns" required>
        <br><br>
        <input type="submit" value="Vẽ">
        <input type="reset" value="Nhập lại">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = isset($_POST["rows"]) ? intval($_POST["rows"]) : 0;
        $columns = isset($_POST["columns"]) ? intval($_POST["columns"]) : 0;

        if ($rows > 0 && $columns > 0) {
            echo "<table>";
            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $columns; $j++) {
                    echo "<td><input type='text' name='cell[$i][$j]'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Vui lòng nhập số dòng và số cột hợp lệ.</p>";
        }
    }
    ?>
</body>

</html>