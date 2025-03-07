<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-ex2.css">
    <title>Lista números</title>
</head>
<body>

    <form method="post">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <label for="numero<?php echo $i; ?>">Número <?php echo $i + 1; ?>:</label>
            <input type="number" name="numero<?php echo $i; ?>" id="numero<?php echo $i; ?>" required><br><br>
        <?php } ?>
        <input type="submit" value="Analisar">
    </form>

    <?php
    $num = [];
    $pos = 0;
    $neg = 0;
    $imp = 0;
    $par = 0;

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        for ($i = 0; $i < 10; $i++) {
            $num[$i] = $_POST["numero" . $i];

            if ($num[$i] < 0) {
                $neg++;
            } else if ($num[$i] > 0) {
                $pos++;
            }

            if ($num[$i] % 2 == 0) {
                $par++;
            } else {
                $imp++;
            }
        }

        echo "<h1>Números analisados aqui estão os resultados:</h1>";
        echo "Números negativos: " . $neg . "<br>";
        echo "Números positivos: " . $pos . "<br>";
        echo "Números ímpares: " . $imp . "<br>";
        echo "Números pares: " . $par . "<br>";
    }
    ?>

</body>
</html>