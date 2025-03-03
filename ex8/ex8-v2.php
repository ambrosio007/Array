<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Veículos</title>
</head>
<body>

    <h1>Cadastro de Veículos</h1>

    <form method="post">
        <?php for ($i = 0; $i < 10; $i++) { ?>
            <h2>Veículo <?php echo $i + 1; ?></h2>
            <label for="modelo_<?php echo $i; ?>">Modelo:</label>
            <input type="text" name="veiculos[<?php echo $i; ?>][modelo]" id="modelo_<?php echo $i; ?>" required><br><br>

            <label for="fabricante_<?php echo $i; ?>">Fabricante:</label>
            <input type="text" name="veiculos[<?php echo $i; ?>][fabricante]" id="fabricante_<?php echo $i; ?>" required><br><br>

            <label for="cor_<?php echo $i; ?>">Cor:</label>
            <input type="text" name="veiculos[<?php echo $i; ?>][cor]" id="cor_<?php echo $i; ?>" required><br><br>

            <label for="portas_<?php echo $i; ?>">Número de Portas:</label>
            <input type="number" name="veiculos[<?php echo $i; ?>][portas]" id="portas_<?php echo $i; ?>" required><br><br>

            <label for="ano_<?php echo $i; ?>">Ano de Fabricação:</label>
            <input type="number" name="veiculos[<?php echo $i; ?>][ano]" id="ano_<?php echo $i; ?>" required><br><br>
        <?php } ?>

        <input type="submit" value="Cadastrar Veículos">

        <h2>Listagens</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $veiculos = $_POST["veiculos"];

        echo "<h2>Modelos e Anos dos Veículos:</h2>";
        foreach ($veiculos as $veiculo) {
            echo "Modelo: " . $veiculo["modelo"] . ", Ano: " . $veiculo["ano"] . "<br>";
        }

        echo "<h2>Veículos Cor Prata:</h2>";
        foreach ($veiculos as $veiculo) {
            if ($veiculo["cor"] == "prata") {
                echo "Modelo: " . $veiculo["modelo"] . ", Fabricante: " . $veiculo["fabricante"] . ", Ano: " . $veiculo["ano"] . "<br>";
            }
        }

        echo "<h2>Veículos com Cor e Portas:</h2>";
        foreach ($veiculos as $veiculo) {
            echo "Modelo: " . $veiculo["modelo"] . ", Cor: " . $veiculo["cor"] . ", Portas: " . $veiculo["portas"] . "<br>";
        }

        echo "<h2>Veículos da Ford:</h2>";
        foreach ($veiculos as $veiculo) {
            if ($veiculo["fabricante"] == "Ford") {
                echo "Modelo: " . $veiculo["modelo"] . ", Ano: " . $veiculo["ano"] . "<br>";
            }
        }

        echo "<h2>Veículos a partir de 2013:</h2>";
        foreach ($veiculos as $veiculo) {
            if ($veiculo["ano"] >= 2013) {
                echo "Modelo: " . $veiculo["modelo"] . ", Ano: " . $veiculo["ano"] . "<br>";
            }
        }
    }
    ?>
    </form>

</body>
</html