
<?php

    function cadastrarVeiculos() {
        $veiculos = [];
        for ($i = 0; $i < 10; $i++) {
            echo "Cadastro do veículo " . ($i + 1) . ":\n";
            $modelo = readline("Modelo: ");
            $fabricante = readline("Fabricante: ");
            $cor = readline("Cor: ");
            $portas = (int) readline("Número de portas: ");
            $ano = (int) readline("Ano de fabricação: ");
            $veiculos[] = [$i + 1, $modelo, $fabricante, $cor, $portas, $ano];
        }
        return $veiculos;
    }

    function listarModelosEAno($veiculos) {
        echo "\nModelos e anos dos veículos:\n";
        foreach ($veiculos as $veiculo) {
            echo "Modelo: " . $veiculo[1] . ", Ano: " . $veiculo[5] . "\n";
        }
    }

    function listarVeiculosPorCor($veiculos, $cor) {
        echo "\nVeículos de cor " . $cor . ":\n";
        foreach ($veiculos as $veiculo) {
            if ($veiculo[3] == $cor) {
                echo "Modelo: " . $veiculo[1] . ", Fabricante: " . $veiculo[2] . ", Ano: " . $veiculo[5] . "\n";
            }
        }
    }

    function listarVeiculosComCorEPortas($veiculos) {
        echo "\nVeículos com cor e quantidade de portas:\n";
        foreach ($veiculos as $veiculo) {
            echo "Modelo: " . $veiculo[1] . ", Cor: " . $veiculo[3] . ", Portas: " . $veiculo[4] . "\n";
        }
    }

    function listarVeiculosPorFabricante($veiculos, $fabricante) {
        echo "\nVeículos da " . $fabricante . ":\n";
        foreach ($veiculos as $veiculo) {
            if ($veiculo[2] == $fabricante) {
                echo "Modelo: " . $veiculo[1] . ", Ano: " . $veiculo[5] . "\n";
            }
        }
    }

    function listarVeiculosPorAno($veiculos, $anoMinimo) {
        echo "\nVeículos fabricados a partir de " . $anoMinimo . ":\n";
        foreach ($veiculos as $veiculo) {
            if ($veiculo[5] >= $anoMinimo) {
                echo "Modelo: " . $veiculo[1] . ", Ano: " . $veiculo[5] . "\n";
            }
        }
    }

 
    $veiculos = cadastrarVeiculos();
    listarModelosEAno($veiculos);
    listarVeiculosPorCor($veiculos, "prata");
    listarVeiculosComCorEPortas($veiculos);
    listarVeiculosPorFabricante($veiculos, "Ford");
    listarVeiculosPorAno($veiculos, 2013);

    ?>