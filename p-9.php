<!-- What will be the values of $a and $b after the code below is executed? 
Explain your answer. -->
<?php   




$a = '1'; 
$b = &$a; 
$b = "2$b";  

echo "$a <br>";
echo "$b <br>";
echo "$b <br>";


// OUTPUT :

            // 21
            // 21
            // 21




?>