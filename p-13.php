<!-- Use a for loop to total the contents of an integer array called numbers 
which has five elements. Store the result in an integer called total. -->


<?php 

    $total = 0;
    for ($numbers=1; $numbers <=5 ; $numbers++)
    { 
        $total = $total + $numbers;
    }
        echo "The Total Of All Five Elements Are : $total";


?>