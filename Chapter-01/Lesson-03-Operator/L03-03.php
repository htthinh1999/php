<?php
    $var = "Keycode Mon";
    echo (is_string($var))? $var." là 1 chuỗi": $var." không phải là 1 chuỗi";
    echo "<br>";
    
    $var = 12;
    echo (is_string($var))? $var." là 1 chuỗi": $var." không phải là 1 chuỗi";
    echo "<br>";
    echo ($var > 0)? $var." là số dương": (($var == 0)? $var." là số không âm, cũng là số không dương": $var." là số âm"); 