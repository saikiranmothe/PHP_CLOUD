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
	
?>


</body>

</html>