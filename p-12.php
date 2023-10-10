
<!-- Get random values from array -->



<?php

    $my_arr = ["James", "Stark", "Surat", "Rajesh", "Troy"];

    $random= array_rand($my_arr); 
    
    echo "The Random Value is :". $my_arr[$random];
    echo "<br>";
        // OR 
    
    
    echo "The Value using a rand function : " ,rand(1,15);
    
?>