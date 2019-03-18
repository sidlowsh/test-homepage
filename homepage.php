<? php   
	echo "Today's date is :"; 
	$today = date("d/m/Y"); 
	echo $today; 
?> 

<? php 
	function getPercentage($number, $total, $percentage){
	$percentage=($number*100)/$total;	
	return $percentage;
	}
	getPercentage (number: 3, total: 21);
?>

<? php
	$phone_numbers = [
	  "Sarah" => "867-5309",
	];

	print_r($phone_numbers);
	echo "Sarah's phone number is " . $phone_numbers["Sarah"] . "\n";
?>