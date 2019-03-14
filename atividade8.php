<?php

    print "Quantos cigarros vc fuma por dia? \n";
    $cigarros_por_dia = (int) fgets(STDIN);

    print "Há quantos anos vc fuma? \n";
    $anos_fumados = (int) fgets(STDIN);


    $cigarros_fumados = $cigarros_por_dia*365*$anos_fumados;
    $minutos_perdidos =  $cigarros_fumados *10;
    $horas_perdidas =  $minutos_perdidos /60;
    $dias_perdidos =  round($horas_perdidas /24);

    print "Vc perdeu $dias_perdidos dias de vida \n";