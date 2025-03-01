<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style-ex6.css">
    <title>Ordem Contrária</title>
</head>
<body>

<form method="post">
    <h2>Digite 10 valores:</h2>
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <label for="valor<?php echo $i; ?>">Valor <?php echo $i + 1; ?>:</label>
        <input type="number" name="valor<?php echo $i; ?>" id="valor<?php echo $i; ?>" required><br><br>
    <?php } ?>
    <input type="submit" value="Exibir na ordem contrária">

    <?php
$val = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 0; $i < 10; $i++) {
        $val[$i] = $_POST["valor" . $i];
    }

    // Escrever os valores na ordem contrária
    echo "<h2>Valores na ordem contrária:</h2>";
    for ($i = 9; $i >= 0; $i--) {
        echo $val[$i] . "<br>";
    }
}
?>

</form>

</body>
</html>