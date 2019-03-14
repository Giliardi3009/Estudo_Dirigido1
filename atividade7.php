<?php

    //Escreva um programa que pergunte a quantidade de km percorridos por um carro alugado pelo usuário,
    //assim como a quantidade de dias pelos quais o carro foi alugado.
    //Calcule o preço a pagar, sabendo que o carro custa R$60,00 por dia e R$0,15 por km rodado.

    print "Quantos quilômetros foram rodados?";
    $km = (int) fgets(STDIN);
    
    print "Em quantos dias?";
    $dia = (int) fgets(STDIN);

    $km_p = 0.15;
    $dia_p = 60;

    $km_f = $km*$km_p;
    $dia_f = $dia*$dia_p;

    $total = $km_f+$dia_f;

    print "Você vai pagar no total $total reais.";