<?php 
	/* Functions in PHP */
	/*
	function functionName() {
  	code to be executed;
	}

	*/	

	#example function from w3schools
	function writeMsg() {
	  echo "Hello world!";
	}
	writeMsg(); // call the function


	#add function
	function add($a,$b) {
		echo( $a +$b );
	}
		echo("<hr>");

	$abc = add(4,5);
	echo $abc;

	#divison function
	function divide($a,$b) {
		echo($a /$b );
	}
	echo("<hr>");
	$cde = divide(20,5);
	echo $cde;
 

  #harish function -- USER DFFINED FUNCTION

  function harishlovers($gfname) {
  	echo ("Harish Present Girl Friend <h3>$gfname</h3>");
  }
 	harishlovers("Saba");
 	harishlovers("Divya Reddy");
 	harishlovers("Sonam Kaur");
 	harishlovers("Roxana");
 	harishlovers("Preethi");



?>