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
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil dan sanitasi input
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        // Tampilkan hasil input yang sudah disanitasi
        echo "<h3>Input yang diterima:</h3>";
        echo $input;
    }
    ?>
</body>
</html>
