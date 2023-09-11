<!DOCTYPE html>
<html>
<head>
    <title>Form Liên Hệ</title>
    <style>
        .hidden {
            display: none;
        }
        #contact-form{
            margin-top: 50px;
            margin-left: 30px;
        }
        #result {
            margin-top: 50px;
            margin-left: 30px;
            padding: 10px;
        }
    </style>
    <?php
    include('header.php');
    ?>
</head>
<body>
    <?php
    $showForm = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];
        $notes = $_POST["notes"];
        $showForm = false;
    }
    ?>

    <?php if ($showForm): ?>
        <form id="contact-form" method="post">
            <h1>Form Liên Hệ</h1> <br><br>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo isset($username) ? $username : ''; ?>" required><br><br>

            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" <?php echo isset($gender) && $gender === 'male' ? 'checked' : ''; ?> required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" <?php echo isset($gender) && $gender === 'female' ? 'checked' : ''; ?> required>
            <label for="female">Female</label><br><br>

            <label for="address">Địa chỉ:</label>
            <select id="address" name="address">
                <option value="Hà Nội" <?php echo isset($address) && $address === 'Hà Nội' ? 'selected' : ''; ?>>Hà Nội</option>
                <option value="TP.HCM" <?php echo isset($address) && $address === 'TP.HCM' ? 'selected' : ''; ?>>TP.HCM</option>
                <option value="Huế" <?php echo isset($address) && $address === 'Huế' ? 'selected' : ''; ?>>Huế</option>
                <option value="Đà Nẵng" <?php echo isset($address) && $address === 'Đà Nẵng' ? 'selected' : ''; ?>>Đà Nẵng</option>
            </select><br><br>

            <label for="notes">Ghi chú:</label><br>
            <textarea id="notes" name="notes" rows="4" cols="50"><?php echo isset($notes) ? $notes : ''; ?></textarea><br><br>

            <button type="reset" id="reset-button">Reset</button>
            <button type="submit" id="contact-button">Contact</button>
        </form>
    <?php endif; ?>

    <?php if (!$showForm): ?>
        <div id="result">
            <h2>Kết Quả:</h2><br><br>
            <p>Username: <?php echo htmlspecialchars($username); ?></p> <br>
            <p>Gender: <?php echo htmlspecialchars($gender); ?></p><br>
            <p>Địa chỉ: <?php echo htmlspecialchars($address); ?></p><br>
            <p>Ghi chú: <?php echo htmlspecialchars($notes); ?></p><br>
        </div>
    <?php endif; 
    ?>

</body>
</html>
