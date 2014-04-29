<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 	
	  //commenting in PHP
	 		echo "Single Line Comments";
			#single line comments in php
			echo "Multi Line Commeting"; #print hello world 
			print "print hello word";
		  //Multi line commeting in php
   	  /*  
				this is the 
				way to write multiple lines of 
				comments
   	  */

	  //Variables 
      //global variable 
			$global = "value"  // It can access globally ,,through out program

			function DemoFunction(arg1,arg2,arg3){
			  $local_variable = "value" //static variable == limit upto function
			}

      $variable_name = "value"
		
      //Boolean Values 
      $boolean = true;  #some comment 
      $boolean = false; #false value 

/*  
  **************************
	  Data Types & Variables
	************************* 
*/
      #Integers
      $int1  = 12;   # values passed to Variable
      $int2 = -12;  //rational number passed to variable
      $int3 = 012;   #octal number passed to variable
      $int4 = 0X0f; // => 15  HEX number

      //Floating Number 
      $float = 1.234;
      $float1 = 3.23;
      $float4 = 4.56778;


     //DELETE VARIABLE 
      unset($int1)


    /*
    ===  OPERATORS ===  
	   */
    $sum = 1+1;  //2
    $diff = 2-2; //0 
    $multi = 4 * 5; // 20
    $quotient = 6/2; // 3


    //Shorthand Arthematic
    $number  = 0;
    $number += 1;  // Incremented $number by 1 
    echo $number;
    echo ++$number;
    echo $variable_name
    

    $number /= $float; // Divide and assing the quitient to $number 


  ########## STIRNGS IN PHP ###########
    # Interpolation 
    # embed variables in Strings
    $dbl_quotes = "this is a  $variable_name.";


    //special chars embed in strings
    $escape_character = "Some String \t";
    $new_line  = "New lines \n";
    $unescaped = 'This just contains a slash and a t: \t';


    //Enclose a variable in curly braces if needed
     $money = "I have $${number} in the blank ";


     ###HERE DOCS IN PHP STRINGS
$x = <<<'END'
Dear $recipient,
 
I wish you to leave Sunnydale and never return.
 
Not Quite Love,
$sender
END;

$here_doc = <<<'END'
	Some line1 
	line2 
	line3
	line4
END;


//String concatenation is done with  .(dot operator)
echo 'this is a string' . 'some another string';


/* CONSTANTS */
define("FOO","PI");

//access a constant
echo 'print constant'.FOO;
print 'print constant'.PI;


/* 
****** ARRAYS ******
*/
# IN PHP arrays are hashmaps

$associative = array('one'=> 1,'two'=> 2,'Three'=> 3);


#new syntax in PHP 5.4

echo $associative['one']
print $associative['two']


$array = ['one','two','three']
echo $array[1];
print $array[0];


//add an element to the end of an array
$array[] = 'Four';


#remove element from array
unset($array[3]);


/*********************
*output
*/

echo ('Hello World');
//Print hello word! to stdout
///Stdout is the web page if running in a browser


print ('Hello World'); //The same as echo


echo 'Hello World';
print 'Hello World';


$paragraph = 'paragraph';


echo 1100;
echo $variablename;

echo $x; #print variable


#print variable to stdout in human-readable format
var_dump($variablename); 


//prints variable to human readable format
print_r($array)

/**************
  *** LOGIC
*/

#assert throws an error if argument is not true

##
assert( $var1 == $var2); // equality
assert($c != $d); // inquality 
assert($c <> $a) // alternate inequality
assert($a < $c )
assert($c > $d)
assert($a <= $b)









			//Array Functions
			//echo Array.
	?>


</body>
</html>