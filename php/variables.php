<!DOCTYPE html>
<html>
<head>
	<title><?php 
	$title = "Variables in PHP";
	echo $title; ?>
	</title>
</head>

<body>
<?php echo $title;
	
	 //Variables 
   //global variable 
	  $global = "global Variable";  // It can access globally ,,through out program
	  echo " It can access globally ,,through out program";
	  echo "&nbsp";
	  echo "<hr>";
	  $local_variable = "Local Variable"; //static variable == limit upto function    $variable_name = "value";
	  echo $global;
	  echo "<hr>";
	  echo $local_variable;

 ?>

</body>
</html>