<?php
// Verifica se foram fornecidos os argumentos necessários
if(count($argv) < 2) {
    echo "Por favor, forneça um número como argumentos.\n";
    exit(1); 
}

$num = intval($argv[1]);

if ($num > 0 && $num <= 12){
    switch($num){
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "fevereiro";
            break;        
        case 3:
            echo "março";
            break;        
        case 4:
            echo "abril";
            break;        
        case 5:
            echo "maio";
             break;        
        case 6:
            echo "junho";
            break;        
        case 7:
            echo "julho";
            break;        
        case 8:
             echo "agosto";
             break;       
        case 9:
            echo "setembro";
            break;       
        case 10:
            echo "Outubro";
            break;        
        case 11:
            echo "novembro";
            break;       
        case 12:
            echo "dezembro";
            break;
            
        
    }
     
}
else{
    echo " não existe mês com este número";
}

