<?php

// Verifica se foram fornecidos os argumentos necessários
if(count($argv) < 2) {
    echo "Por favor, forneça um número como argumentos.\n";
    exit(1); 
}

$palavra = $argv[1];

echo "$palavra\n$palavra $palavra\n$palavra $palavra $palavra\n$palavra $palavra $palavra $palavra";