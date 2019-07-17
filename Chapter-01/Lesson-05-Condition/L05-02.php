<?php
    $a = -12;
    
    if(($a >= 0)&&($a % 2 == 0))
        echo $a." là số nguyên dương chẵn!";
    else if(($a >= 0)&&($a % 2 != 0))
        echo $a." là số nguyên dương lẻ!";
    else if(($a < 0)&&($a % 2 == 0))
        echo $a." là số nguyên âm chẵn!";
    else echo $a." là số nguyên âm lẻ!";