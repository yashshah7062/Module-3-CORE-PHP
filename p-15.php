<!-- How can you declare the array (all type) in PHP? Explain with example 
Covert a JSON string to array. -->


<?php
   $json = '{"UK": "London", "ES": "Madrid", "IT": "Rome"}';
    echo"<pre>";
    print_r (json_decode($json));




// JSON string in PHP Array
// $jsonString = '{"Lion":101,"Tiger":102,"Crocodile":103,"Elephant":104}';

// $phpArray = json_decode($jsonString, true);

// display the converted PHP array


// var_dump($phpArray);
?>
