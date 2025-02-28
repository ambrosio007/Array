<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema notas</title>
</head>
<body>

    <form method="post">
        <?php

        $s_notas = 0;
        $m_nota = 0;
        $aluon_m_nota = 0;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            for($i = 0; $i < 10; $i++){
                $nomes = $_POST["nome$i"];
                $notas = $_POST["nota$i"];

                $s_notas += $notas;
        
            if($nota > $m_nota){
                $m_nota = $nota;
                $aluon_m_nota = $nome;
            }
        }

        $media = $somar_notas / 10;

        echo "<h3>Resultados</h3>";
        echo "A média dos alunos é: " . number_format($media,2) . "<br>";
        echo "Aluno com a maior nota: $aluon_m_nota com nota $m_nota ";

        }else{
            echo '<h1>Insira os nomes e as notas dos alunos</h1>';
            echo '<form <form method="post">';

            for($i = 1; $i < 11; $i++){
                echo '<label for="id-nome">Nome do aluno ' . $i .' : </label>';
                echo '<input type="text" class="nome$i" id="id-nome" placeholder="Nome" requeride> <br><br>';
                echo '<label for="id-nota">Nota do aluno' . $i . ' : </label>';
                echo ' <input type="number" class="nota$i" id="id-nota" placeholder="Nota" requeride> <br><br>';
            }

            echo '<input type="submit" value="Enviar">';
            echo '</form>';
        }


        ?>
    </form>
    
</body>
</html>