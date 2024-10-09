<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <h2>Form Input</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="input">Input:</label>
        <input type="text" name="input" id="input" required>
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil dan sanitasi input
        $input = $_POST['nama'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        // Tampilkan hasil input yang sudah disanitasi
        echo "<h3>Input yang diterima:</h3>";
        echo $input;
        
        // Memeriksa apakah input adalah email yang valid
        $email = $_POST['email'];
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "<h3>Email yang diterima:</h3>";
            echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        } else {
            // Tangani input yang tidak valid
            echo "<h3>Email tidak valid!</h3>";
        }
    }
    ?>
</body>
</html>