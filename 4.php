<?php
// Verifica se foram fornecidos os argumentos necessários
if(count($argv) < 4) {
    echo "Por favor, forneça três números como argumentos.\n";
    exit(1); 
}
//recebe o numero do usuario
$num1 = $argv[1];
$num2 = $argv[2];
$num3 = $argv[3];


// Cria um array com os números fornecidos
$numeros = [$num1, $num2, $num3];

// Ordena os números em ordem crescente
rsort($numeros);

// Imprime os números em ordem crescente
echo "Números em ordem crescente: " . implode(", ", $numeros) . "\n";
