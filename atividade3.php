<?php 

    print "Qual seu salário atual? \n";
    $salario = (float) fgets(STDIN);

    print "Quantos por cento irá aumentar seu salário? \n";
    $porcento = (float) fgets(STDIN);

    $salario_a_mais = ($salario*$porcento)/100;
    $salario_total = $salario+$salario_a_mais;

    print "Seu salário aumentou $salario_a_mais reais, sendo no total $salario_total reais \n";