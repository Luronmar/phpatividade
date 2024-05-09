<?php
// Verifica se foram fornecidos os argumentos necessários
if(count($argv) < 2) {
    echo "Por favor, forneça um número como argumentos.\n";
    exit(1); 
}

$num = intval($argv[1]);//recebe o numero do usuario
//verifica se é divisivel
if($num%10==0){
    echo "$num é divisivel por 10";
}

if($num%5==0){
    echo "$num é divisivel por 5";
}
if($num%2==0){
    echo "$num é divisivel por 2";
}
