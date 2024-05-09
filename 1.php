<?php
// Verifica se foram fornecidos os argumentos necessários
if(count($argv) < 3) {
    echo "Por favor, forneça dois números como argumentos.\n";
    exit(1); 
}
 $valor1 = intval($argv[1]);//armazena o numero que o usuario digitou na variavel
 $valor2 = intval($argv[2]);

$soma = $valor1+$valor2;//soma os numeros
//faz as condições 
if($soma>20){
$print = $soma+8;
}
else{
 $print = $soma-5;
}
echo "$print";