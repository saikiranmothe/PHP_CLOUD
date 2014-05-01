<<!DOCTYPE html>
<html>
<head>
	<title>String Functions in PHP</title>
</head>

<body>
<h1 style="text-align:center">String Functions in PHP</h1>
<hr>

<?php 
		/*
		******************* STRING FUNCTIONS  *********************
	  */
		# we can define string with double quotes and  single quotes
		$some_variable = "Some String";
		$variable1   	 = 'some string';

	  // HERE DOCS mutli line string we define 
$here_doc  = <<< 'END'

we can write multi 
line string with
here docs

END;

#String Functions 
// string addcslashes ( string $str , string $charlist )
echo addcslashes('foo[ ]', 'A..z');


#bin2hex string function
//string bin2hex ( string $str )

$some_string  = "Some value is passed to variable";
$hex_string  = dechex($some_string);
$binary = "11111001";
$hex = dechex(bindec($binary));
echo $hex;

###
$myin = 4546;
function hex2asc($myin) { 
for ($i=0; $i<strlen($myin)/2; $i++) { 
$myout.=chr(base_convert(substr($myin,$i*2,2),16,10)); 
} 
return $myout; 
}

########################

/*CHOP FUNCTION -- chops last character from string */
$string = "abcdefghijklmnopqrstuvwxyz";
print chop($string);
echo chop($string);


$string  .= chr(20);

#SPRINTF

$str = sprintf("sample string ends in escape %C",27)



?>




</body>
</html>