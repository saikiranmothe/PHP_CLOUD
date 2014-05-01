<!DOCTYPE html>
<html>
<head>
	<title><?php echo "String Functions"; ?></title>
</head>
<body>
<h1 style="text-align:center"> STRING FUNCTIONS - PHP</h1>
<?php  
	echo $hr = "<hr>";
	echo $br = "<br>";
	echo "SAIKIRAN MOTHE"; print " Word Length==";echo  strlen("stirng");
	echo $hr;
	echo strpos("sample string", "string");
	echo $hr;
	echo "<h3>Add c slashes</h3>";
	echo $br;
	echo addcslashes("SAI KIRAN MOTHE", 'I');
	echo $hr;
	$str1 = "<br>.normal.<br>";
	$somestring = 'simple"te"xt';
	echo addslashes($somestring);
	echo $str1.$somestring;
	echo "<h3>BIN2HEX</h3>";
	echo "{$hr}";
	$binconv = bin2hex($str1);
	echo bin2hex($str1) . "<br>";
	echo pack("H*",bin2hex($str1)) . "<br>";	
	
	echo "<h3>CHOP FUNCTION</h3>";
	$str = "Sample Words!";
	echo $str . "<br>";
	echo chop($str,"Words!");
	$str2 = "simple word \n \t ";
  echo $hr;
	echo "<h2>CHR FUNCTION</h2>";
	$str23 = "saikiran";
	$str24 = "kiran";
	echo chr($str23) + chr($str24); 

	echo "<hr>";
	echo "<h1>String Functions</h1>";
	echo "hr";
	$str = "sample string";
	//chop function
	$chop = chop($str,"string");
	
	//chr function
	echo chr(52);
	echo chr(0x52);

	$str = chr(046);
  echo("You $str me forever!");
  $str = chr(43);
	$str2 = chr(61);
	echo("2 $str 2 $str2 4"); 
	

	//CHUNK SPILT FUNCTION
	//chunk_split(string,length,end)
	$str = "Hello world!";
  echo chunk_split($str,1,".");
  $str1  = "ILOVEYOU";
  echo $hr;
  echo chunk_split($str1,1,"^");

  //COUNT CHARS
  $str = "Hello World!";
	print_r(count_chars($str,1));
  echo $hr;

  echo "<h1> CRYPT function </h1>";
	
	#CRYPT function
	echo crypt($str,"pp");

	echo "<hr>";
	#Explode function
	#which breaks strings into array
  #explode(separator,string,limit)
  $str = 'one,two,three,four';
	echo explode(",",$str);
	echo $hr;
	#Setting Locales
	setlocale(LC_ALL,"en_US");
	$locale_info = localeconv();
	print_r($locale_info);
	echo $hr;
	#shuffle characters in a string
	echo str_shuffle("I LOVE YOU");


	/*
	REFERENCES FOR STRING FUNCTIONS 
	http://www.w3schools.com/php/php_ref_string.asp
	www.php.net/manual/en/ref.strings.php
	*/

?>


</body>

</html>