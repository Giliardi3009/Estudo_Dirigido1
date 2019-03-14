<?php 

    print "Digite sua quantidade de dias: \n";
    $dias = (int) fgets(STDIN);

    print "Digite sua quantidade de horas: \n";
    $horas = (int) fgets(STDIN);

    print "Digite sua quantidade de minutos: \n";
    $minutos = (int) fgets(STDIN);

    print "Digite sua quantidade de segundos: \n";
    $segundos = (int) fgets(STDIN);

    $dias_em_segundos = $dias*24*60*60;
    $horas_em_segundos = $horas*60*60;
    $minutos_em_segundos = $minutos*60;

    $segundos_totais = $dias_em_segundos+$horas_em_segundos+$minutos_em_segundos+$segundos;

    print "Vc tem no total $segundos_totais segundos \n";