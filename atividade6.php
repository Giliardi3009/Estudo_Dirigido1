<?php

    print "Qual sua temperatura em graus celsius? \n";
    $celsius = (float) fgets(STDIN);
    
    $fahrenheit = ($celsius*9/5)+32;

    print "Sua temperatura em Fahrenheit é $fahrenheit °F \n"; 