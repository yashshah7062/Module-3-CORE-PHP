<?php  

// Write a PHP program to check Leap years between 1901 to 2016 Using nested if.

    for($year=1901;$year<=2016;$year++)
    {
        if($year % 4 == 0)
        {
            echo "$year is a Leap Year <br>";
        }
        // else{
        //     echo "$year is Not a Leap Year <br>";
        // }
    }

?>