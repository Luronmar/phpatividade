<?php

if(count($argv) < 4) {
    echo "Por favor, forneça três argumentos. Se for do sexo feminino, digite 1\n Escreva na seguinte ordem: Nome, sexo, idade.\n";
    exit(1); 
}

$nome = $argv[1];
$sexo = $argv[2];
$idade = $argv[3];



if($idade <25 && $sexo == 1){
    echo "Aceita";
}
else{
    echo "Não aceita";
}
    