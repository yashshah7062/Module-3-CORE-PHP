<?php   
    // Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34
    
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34</h3>";  
echo "\n";  
echo $n1.' '.$n2.' ';  
while ($num < 8 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}
    
?>