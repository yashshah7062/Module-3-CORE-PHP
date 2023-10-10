<!-- Write a PHP program to find the largest of three numbers using ternary Operator.  -->

<?php

    $num1 = 10;
    $num2 = 20;
    $num3 = 30;

    $max = $num1 > $num2 ? ($num1 > $num3 ? $num1 : $num3)  : ($num2 > $num3 ? $num2 : $num3);
    echo $max;
    // ($num1>==0) ? printf("It is even") : printf("Odd");
?>