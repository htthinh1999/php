<?php
    $a = -15    ;
    
    $firstResult  = ($a>=0)?   "nguyên dương":"nguyên âm";
    $secondResult = ($a%2==0)? "chẵn":"lẻ";
    
    $result = $a." là số ".$firstResult." ".$secondResult;
    
    echo $result;