<form action="voltage.php" method="post">

<fieldset><legend>Calculate</legend>

<p><b>Voltage:</b> <input type="text" name="voltage" size="20" maxlength="40" /></p>
<p><b>Current :</b> <input type="text" name="current" size="20" maxlength="40" /></p>
<p><b>Current Rate:</b> <input type="text" name="currentrate" size="20" maxlength="40" /></p>
</fieldset>
<div align="left"><input type="submit" name="submit" value="Calculate" /></div>


<?php 
if($_SERVER['REQUEST_METHOD']=='POST') {  
 
// Validate voltage action
if (!empty($_POST['voltage'])) { 
 	$voltage = $_POST['voltage']; } else { 

	 	$voltage = NULL; 
	 	echo '<p><b>You forgot to enter your voltage!</b></p>'; 
} 
 
// Validate current 
if (!empty($_POST['current'])) { 
	 	$current = $_POST['current']; 
} else { 
	 	$current = NULL; 
	 	echo '<p><b>You forgot to enter your current!</b></p>'; 
} 
 
// Validate current rate 
if (!empty($_POST['currentrate'])) { 
	 	$currentrate = $_POST['currentrate']; 
} else { 
	 	$currentrate = NULL; 
	 	echo '<p><b>You forgot to enter your current rate!</b></p>'; 
} 
 
// If everything is okay, print the message. 
if ($voltage && $current) { 
 
	 	// Calculate the total. 
		$power=$voltage*$current;
	 	$rate = $currentrate/100;

//for 2 decimal 
		$power = number_format ($power, 5);	
		$rate = number_format ($rate, 3);
		
	 	 //print out for header 
echo "
<br> POWER: $power kw ! </i>
<p><br>RATE: $rate RM </p> "; 	

	 	// Print the results. 	 	 
} 
}?>