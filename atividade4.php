<?php 

    print "Qual o valor atual da sua mercadoria? \n";
    $valor = (float) fgets(STDIN);

    print "Quantos por cento sua mercadoria terá de desconto? \n";
    $porcento = (float) fgets(STDIN);

    $valor_a_menos = ($valor*$porcento)/100;
    $valor_final = $valor-$valor_a_menos;

    print "Sua mercadoria teve um desconto de $valor_a_menos reais, e o valor final ficou $valor_final reais \n";