<?php

    print "Qual a distância da sua viagem em km? \n";
    $distancia = (float) fgets(STDIN);

    print "Qual a sua velocidade media em km/h nessa viagem? \n";
    $velocidade = (float) fgets(STDIN);

    $tempo = $distancia/$velocidade;
    $tempo2 = ($tempo*60)/100;
    $tempo_final = $tempo2*100;

    print "Seu tempo de viagem é de $tempo_final minutos, ou se preferir $tempo horas \n";