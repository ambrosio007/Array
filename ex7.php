<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-7.css">
    <title>Cadastro de Pessoas com Vetor</title>
</head>
<body>

<form method="post">
    <h2>Cadastre as 10 Pessoas</h2>
    <?php for ($i = 0; $i < 10; $i++) { ?>
        <h3>Pessoa <?php echo $i + 1; ?>:</h3>
        <label for="nome[<?php echo $i; ?>]">Nome:</label>
        <input type="text" name="nome[<?php echo $i; ?>]" required><br>

        <label for="cidade[<?php echo $i; ?>]">Cidade:</label>
        <input type="text" name="cidade[<?php echo $i; ?>]" required><br>

        <label for="idade[<?php echo $i; ?>]">Idade:</label>
        <input type="number" name="idade[<?php echo $i; ?>]" required><br>

        <label for="sexo[<?php echo $i; ?>]">Sexo:</label>
        <select name="sexo[<?php echo $i; ?>]" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select><br><br>
    <?php } ?>
    <input type="submit" value="Enviar">
    <br>
    <?php
$pessoas = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    for ($i = 0; $i < 10; $i++) {
        $pessoas[] = [
            "nome" => $_POST["nome"][$i],
            "cidade" => $_POST["cidade"][$i],
            "idade" => $_POST["idade"][$i],
            "sexo" => $_POST["sexo"][$i]
        ];
    }

    // Exibir resultados
    echo "<h2>Listagem de Nomes e Idades:</h2>";
    foreach ($pessoas as $pessoa) {
        echo $pessoa["nome"] . " - " . $pessoa["idade"] . " anos<br>";
    }

    echo "<h2>Nomes de Quem Mora em Santos:</h2>";
    foreach ($pessoas as $pessoa) {
        if (strtolower($pessoa["cidade"]) == "santos") {
            echo $pessoa["nome"] . "<br>";
        }
    }

    echo "<h2>Nomes de Quem Tem Mais de 18 Anos:</h2>";
    foreach ($pessoas as $pessoa) {
        if ($pessoa["idade"] > 18) {
            echo $pessoa["nome"] . "<br>";
        }
    }

    $masculino = 0;
    foreach ($pessoas as $pessoa) {
        if (strtolower($pessoa["sexo"]) == "masculino") {
            $masculino++;
        }
    }
    echo "<h2>Pessoas do Sexo Masculino: " . $masculino . "</h2>";
}
?>
</form>

</body>
</html>