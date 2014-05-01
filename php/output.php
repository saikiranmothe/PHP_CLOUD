<!DOCTYPE html>
<html>
<head>
	<title><?php echo "OUTPUT IN PHP"; ?></title>
</head>
<body>
  <?php 
  	echo "<h1>OUTPUT in PHP</h1>";
  	/*  
			There are some differences between echo and print:
			echo - can output one or more strings
			print - can only output one string, and returns always 1
  	*/
		echo "sample","antoher string","3string","4string","5string"; 
		echo "<hr>";
		print "sample";
		echo "<hr>";
		$txt1="Learn PHP";
		$txt2="W3Schools.com";
		$cars=array("Volvo","BMW","Toyota");
		echo $txt1;
		echo "<br>";
		echo "Study PHP at $txt2";
		echo "<hr>";
		echo "My car is a {$cars[1]}";
		
   ?>
</body>
</html>