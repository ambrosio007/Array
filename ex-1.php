<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema notas</title>
</head>
<body>

    <form method="post">
        <?php

        $s_notas = 0;
        $m_nota = 0;
        $aluno_m_nota = ""; // Inicialize como string vazia

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            for ($i = 0; $i < 10; $i++) {
                $nomes = $_POST["nome$i"];
                $notas = $_POST["nota$i"];

                $s_notas += $notas;

                if ($notas > $m_nota) {
                    $m_nota = $notas;
                    $aluno_m_nota = $nomes;
                }
            }

            $media = $s_notas / 10;

            echo "<h3>Resultados</h3>";
            echo "A média dos alunos é: " . number_format($media, 2) . "<br>";
            echo "Aluno com a maior nota: $aluno_m_nota com nota $m_nota ";

        } else {
            echo '<h1>Insira os nomes e as notas dos alunos</h1>';

            for ($i = 0; $i < 10; $i++) {
                echo '<label for="nome' . $i . '">Nome do aluno ' . ($i + 1) . ' : </label>';
                echo '<input type="text" id="nome' . $i . '" name="nome' . $i . '" placeholder="Nome" required> <br><br>';
                echo '<label for="nota' . $i . '">Nota do aluno ' . ($i + 1) . ' : </label>';
                echo '<input type="number" id="nota' . $i . '" name="nota' . $i . '" placeholder="Nota" required> <br><br>';
            }

            echo '<input type="submit" value="Enviar">';
        }

        ?>
    </form>

</body>
</html>