<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-ex5.css">
    <title>Mês do ano</title>
</head>
<body>
    <form method="post">
        <label for="id_mes">Digite um número entre 1 e 12:</label>
        <input type="number" name="numero_mes" id="is_mes" min="1" max="12" required>
        <br><br>
        <input type="submit" value="Mostrar mês">
        <br><br>
        <?php
        
        $mes = [
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        ];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num_mes = $_POST["numero_mes"];

            if(isset($mes[$num_mes])) {
                echo "O mês corespondente ao número selecionado é:" . $mes[$num_mes] . ".";
            }else{
                echo "Número de mês invalido";
            }
        }

        ?>
    </form>
</body>
</html>