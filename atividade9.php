<?php

    print"Qual o seu nome? \n";
    $nome = (string) fgets(STDIN);

    print"Quantos metros quadrados você quer pintar? \n";
    $area = (float) fgets(STDIN);

    $litros = $area/6;
    $latas = ceil($litros/18);
    $preco = $latas*80;
    $galao = ceil($litros/3.6);
    $preco_galao = $galao*25;


    print "Digite 1 para - Latas de 80 reais.\nDigite 2 para - Latas de 25 reais.\nDigite 3 para - Ambos com desconto de 10%. \n\n";
    
    print "Escolha uma opção: \n";
    $opcao = fgets (STDIN);

    switch ($opcao){
    case 1: 
        print "A quantidade de latas que o $nome precisa é de $latas, e vai precisar pagar $preco reais. \n";
        break;

    case 2: 
        print "A quantidade de latas que o $nome precisa é de $galao, e vai precisar pagar $preco_galao reais. \n";
        break;

    case 3:
        $latas = (int)($litros/108);
        $faltou = fmod ($litros,108);
        $galao = ceil($faltou/21.6);
        $preco_ambos = ($latas*80)+($galao*25);
        print "A quantidade de latas que o $nome precisa é de $latas latas e de $galao galões, com o preço de $preco_ambos reais \n";

    }


















    