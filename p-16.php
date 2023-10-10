<!-- Write a PHP script which decodes the following JSON string.  -->
<?php

// $a = '{"fname": "Nick", "mname": "F.", "lname": "Delos Reyes", "birthday": "1995-04-01", "address": { "Country": "America", "state": "New York" }}';
// echo "<pre>";
// print_r(json_decode($a));





// Declare a json string 
$json = '{"g":7, "e":5, "e":5, "k":11, "s":19}'; 


echo "<pre>";
// print_r(json_decode($json)); 

print_r(json_decode($json, true)); 

 

?>