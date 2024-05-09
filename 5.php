<?php
//Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados

// Verifica se foram fornecidos os argumentos necessários
if(count($argv) < 4) {
    echo "Por favor, forneça três números como argumentos.\n";
    exit(1); 
}
//recebe o numero do usuario
$num1 = intval($argv[1]);
$num2 = intval($argv[2]);
$num3 = intval($argv[3]);


// Verifica se os números formam um triângulo
if ($num1 + $num2 > $num3 && $num1 + $num3 > $num2 && $num2 + $num3 > $num1) {
    // Verifica o tipo de triângulo
    if ($num1 == $num2 && $num2 == $num3) {
        echo "Triângulo Equilátero\n"; // Todos os lados são iguais
    } elseif ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
        echo "Triângulo Isósceles\n"; // Dois lados são iguais
    } else {
        echo "Triângulo Escaleno\n"; // Todos os lados são diferentes
    }
} else {
    echo "Os lados fornecidos não formam um triângulo.\n";
}




