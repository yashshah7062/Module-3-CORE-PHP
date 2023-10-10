<!--  P-1.  Write a PHP program to enter marks of five subjects Physics, Chemistry, 
Biology, Mathematics and Computer, calculate percentage and grade by if else -->

<?php

$sub_1 = 95;
$sub_2 = 85;
$sub_3 = 74;
$sub_4 = 64;
$sub_5 = 53;

echo "The Total Of All 5 Subjects : $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5 = ";
$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5 ;
echo "$total <br>";
echo "===========================================<br>";
// echo "The Total of All 5 Subjects are : $total <br>";

$percentage = ($total / 500) * 100;
echo "The Percentage is : $percentage <br>";
echo "===========================================<br>";

if ($percentage >= 90)
{
    echo "the grade is : A";
    $grade = "A";
    echo "<br>===========================================<br>";
}
else if ($percentage >= 80 && $percentage < 90)
{

    // $grade = "B";
    echo "The grade is : B";
    echo "<br>===========================================<br>";
}
else if ($percentage >= 70 && $percentage < 80)
{
    // $grade = "C";
    echo "The grade is : C";
    echo "<br>===========================================<br>";
}
else if ($percentage >= 60 && $percentage < 70)
{
    // $grade = "D";
    echo "The grade is : D";
    echo "<br>===========================================<br>";
}
else
{
    // $grade = "E";
    echo "The Grade is : E";
    echo "<br>===========================================<br>";
}

// echo "The Grade is = '$grade' <br>";

?>