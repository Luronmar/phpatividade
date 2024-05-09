<?php

// Inicializar variáveis para armazenar a soma dos positivos e o total de números negativos
$somaPositivos = 0;
$totalNegativos = 0;

// Loop para ler 20 números
for ($i = 1; $i <= 20; $i++) {
    echo "Digite o número $i: ";
    $numero = floatval(readline());

    // Verificar se o número é positivo ou negativo
    if ($numero > 0) {
        $somaPositivos += $numero; // Adicionar o número à soma dos positivos
    } elseif ($numero < 0) {
        $totalNegativos++; // Incrementar o contador de números negativos
    }
}

// Imprimir a soma dos positivos e o total de números negativos
echo "Soma dos números positivos: $somaPositivos\n";
echo "Total de números negativos: $totalNegativos\n";

?>

