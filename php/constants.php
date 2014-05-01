<!--
Constants are like variables except 
that once they are defined they cannot be changed 
or undefined.
 -->

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		<?php echo "PHP constants"; 
 			$hr = "<hr>";
 		 ?>
 	</title>
 </head>
 <body>	
 	<h1 style="text-align:center"> PHP CONSTANTS </h1>
 <?php 
 		echo $hr;
 		/* CONSTANTS IN PHP
				A valid constant name starts with a letter or underscore (no $ sign before the constant name).
				To set a constant, use the define() function

 		 */
	  define ("GREETING", "Welcome to W3Schools.com!");
	  echo GREETING;
	  define("SAI","COOL DUDE");
	  print $hr;
	  echo sai;
 ?>

 
 </body>
 </html>