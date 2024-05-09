<?php
//// Verifica se foram fornecidos os argumentos necessários
if(count($argv) < 2) {
    echo "Por favor, forneça um número como argumentos.\n";
    exit(1); 
}
//Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir

$vezes = intval($argv[1]);

for ($i = 0; $i<$vezes ; $i++){
    echo "Sol\n";
}