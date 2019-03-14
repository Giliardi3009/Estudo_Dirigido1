<?php

    print "Digite um valor em metros:";
    $metros = (int) fgets(STDIN);

    $mili = $metros*1000;

    print "Seu valor em metros são $mili milímetros";