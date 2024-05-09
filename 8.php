<?php

// Função para calcular o produto de todos os números de 1 até o número fornecido
function calcularProduto($numero) {
    $produto = 1;
    for ($i = 1; $i <= $numero; $i++) {
        echo $i;
        $produto *= $i;
        if ($i != $numero) {
            echo " x ";
        }
    }
    return $produto;
}

// Ler o número fornecido pelo usuário
echo "Digite um número: ";
$numero = intval(readline());

// Calcular o produto e imprimir os números e o produto
echo "\nNúmeros de 1 até $numero: ";
$produto = calcularProduto($numero);
echo "\nProduto: $produto\n";

?>
