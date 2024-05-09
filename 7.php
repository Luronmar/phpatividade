<?php

// Função para calcular a data de devolução com base no tipo de usuário
function calcularDataDevolucao($tipoUsuario) {
    if ($tipoUsuario === "professor") {
        return date('Y-m-d', strtotime('+10 days'));
    } elseif ($tipoUsuario === "aluno") {
        return date('Y-m-d', strtotime('+3 days'));
    } else {
        return "Tipo de usuário inválido";
    }
}

// Função para imprimir o recibo
function imprimirRecibo($livro, $tipoUsuario, $dataDevolucao) {
    echo "Recibo:\n";
    echo "Livro: $livro\n";
    echo "Tipo de usuário: $tipoUsuario\n";
    echo "Data de devolução: $dataDevolucao\n";
}

// Ler entrada do usuário
echo "Digite o nome do livro: ";
$livro = readline();

echo "Digite o tipo de usuário (professor ou aluno): ";
$tipoUsuario = readline();

// Calcular a data de devolução
$dataDevolucao = calcularDataDevolucao($tipoUsuario);

// Imprimir o recibo
imprimirRecibo($livro, $tipoUsuario, $dataDevolucao);

?>
