<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-ex3.css">
    <title>Multiplicação de Vetor</title>
</head>
<body>
    
<form method="post">
    <h2>Digite 10 Números:</h2>
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <label for="numeros[<?php echo $i; ?>]">Número <?php echo $i + 1; ?>:</label>
        <input type="number" name="numeros[<?php echo $i; ?>]" id="numeros[<?php echo $i; ?>]" required><br><br>
    <?php } ?>

    <label for="multiplicador">Digite o Multiplicador:</label>
    <input type="number" name="multiplicador" id="multiplicador" required><br><br>

    <input type="submit" value="Calcular">

    <?php 

        $num = [];
        $mult = null;
        $resul = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["numeros"])) {
                $num = $_POST["numeros"];
            }
            if (isset($_POST["multiplicador"])) {
                $mult = $_POST["multiplicador"];
            }
            
            if (!empty($num) && $mult !== null) {
                foreach ($num as $valor) {
                    $resul[] = $valor * $mult;
                }

                echo "<h2>Resultados da Multiplicação:</h2>";
                echo "Vetor original: [" . implode(", ", $num) . "]<br>";
                echo "Multiplicador: " . $mult . "<br>";
                echo "Vetor resultante: [" . implode(", ", $resul) . "]<br>";
            }
        }

    ?>
</form>

</body>
</html>