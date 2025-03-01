<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-ex4.css">
    <title>Mutiplicação emtre vetorez</title>
</head>
<body>

    <form method="post">
        <h2>Digite os Valores:</h2>
        <table>
            <tr>
                <th>1° Valores</th>
                <th>2° Valores</th>
            </tr>
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <tr>
                    <td><input type="number" name="vetor_a[<?php echo $i; ?>]" required></td>
                    <td><input type="number" name="vetor_b[<?php echo $i; ?>]" required></td>
                </tr>
            <?php } ?>
        </table>
        <br>
        <input type="submit" value="Multiplicar">

        <?php
    $vetor_a = [];
    $vetor_b = [];
    $resultados = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        for ($i = 0; $i < 10; $i++) {
            $vetor_a[$i] = $_POST["vetor_a"][$i];
            $vetor_b[$i] = $_POST["vetor_b"][$i];
            $resultados[$i] = $vetor_a[$i] * $vetor_b[$i];
        }

        echo "<h2>Resultados da Multiplicação:</h2>";
        echo "<table>";
        echo "<tr><th>Índice</th><th>Vetor A</th><th>Vetor B</th><th>Resultado</th></tr>";
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            echo "<td>" . $i . "</td>";
            echo "<td>" . $vetor_a[$i] . "</td>";
            echo "<td>" . $vetor_b[$i] . "</td>";
            echo "<td>" . $resultados[$i] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

    </form>

</body>
</html>