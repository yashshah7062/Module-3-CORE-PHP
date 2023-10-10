<!-- Write a program to find whether a number is Armstrong or not  -->


<?php
// PHP code to check whether a number is 
// armstrong number or not

// function to check whether the number is 
// armstrong number or not
// function armstrongCheck($number){/
	$number = 152;
	$sum = 0; 
	$x = $number; 
	while($x != 0) 
	{ 
		$rem = $x % 10; 
		$sum = $sum + $rem*$rem*$rem; 
		$x = $x / 10; 
	} 
	
	// if true then armstrong number
	if ($number == $sum)
		echo " $x is Armstrong Number";
	
	// not an armstrong number 
	
	else{
		echo " $x is Not Armstrong Number"; 

	}
	
	
	// }

// Driver Code
// $number = 407;
// $flag = armstrongCheck($number);
// if ($flag == 1)
// 	echo "Yes";
// else
// 	echo "No";
?>
