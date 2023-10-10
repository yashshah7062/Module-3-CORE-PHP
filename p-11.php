

<!-- Write program to remove duplicate values from array  -->


<?php 

$array_value = array(10,20,20,30,40,50);

$array_count =   count($array_value);

$duplicate_array = array();

for($i=0; $i<$array_count;$i++)
{
    $duplicate_array[$array_value[$i]] = $array_value[$i];
}

// foreach ($array_value as $key => $value) 
// {
//     $duplicate_array[$array_value[$i]] = $array_value[$i];
// }
echo "<pre>";

print_r ($duplicate_array);


// $numbers = [1,2,3,4,5,6,7,8,9,10,2,5,8];
// $temp = [];

// foreach($numbers as $num)
// {
//     $temp[$num] = $num;
//     echo "";
// }
?>



