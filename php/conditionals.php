<!DOCTYPE html>
<html>
<head>
	<title><?php 
  	echo("Conditionals in PHP");
  	$hr = "<hr>";
  	?>
	</title>
</head>
<body>
<h1 style="text-align:center">PHP Conditional Statements</h1>
	<?php
		echo($hr);
		/*  if statement - executes some code only if a specified condition is true
		if...else statement - executes some code if a condition is true and another code if the condition is false
		if...elseif....else statement - selects one of several blocks of code to be executed
		switch statement - selects one of many blocks of code to be executed
  */
	/*
		IF CONDITION SYNTAX*
		if (condition) {
		  code to be executed if condition is true;
		}
	*/
	 $harish_cooldude = TRUE;
		if ($harish_cooldude) {
			echo("He is cooldude {$hr}");
			$hr;
		};

	/*
		if (condition) {
  			code to be executed if condition is true;
		} 
		else 
		{
 			 code to be executed if condition is false;
		}	
	*/

		$harish_gfs = " somename ";
		if ($harish_gfs  ) {
					echo("may he loose his :P:P:P soon :P");
				} 
				else
			{
			echo("he need more time if he have too choose another option :P");		
			}
		echo($hr);

		$harish_gfnos = 109;
		if ($harish_gfnos < 200) {
			echo("WOW HE IS A LOVER BOY");
			}
		 else {
		 	echo("<h1>He is a HUNTER</h1>");
		 }
			# code...
		

		/* elseif */
		echo($hr);
		$harish_oldgfs = 39;
		if ($harish_oldgfs < 30) {
					echo("Harish says -GIrls are time waste");
				}
				elseif ($harish_oldgfs > 50){
					echo("Girls are like Berries");
						}
				else { echo("WOW GIRLS");}


	?>


	<!-- Switch Statement -->

	<?php 
	/*
		switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
  ...
  default:
    code to be executed if n is different from all labels;
}
	*/


		$harish_gf = "somename";

		switch ($harish_gf) {
		  case "newname":
		    echo "Harish favorite girl is newname!";
		    break;
		  case "unknown":
		    echo "Yet to be decided names";
		    break;
		  case "loading":
		    echo "Loading New girls";
		    break;
		  default:
		    echo "Default is Default == somename";
		}
	

	?>

</body>

</html>