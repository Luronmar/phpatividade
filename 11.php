<?php
// Verifica se foram fornecidos os argumentos necessários
if(count($argv) < 2) {
    echo "Por favor, forneça um número como argumentos.\n";
    exit(1); 
}

$num = $argv[1];

for ($i=0;$i<=10;$i++){
    $tabuada = $num*$i;
    echo "| $tabuada |";
}