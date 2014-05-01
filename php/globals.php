<!DOCTYPE html>
<html>
<head>
	<title><?php print("globals in PHP") ?></title>
	<style type="text/css">
		h1{text-align: center};

	</style>
</head>
<body>
<?php 
 
 print("Globals in PHP");
 echo "<hr>";
 echo "$GLOBALS";
 echo "$_SERVER";
 echo "$_ENV";
 echo "<hr>";
 echo "$_FILES";


 echo "<hr>";
 echo "Server Global Variable Sample";
 echo("<hr>");
 echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<hr>";
echo $_SERVER['REMOTE_ADDR'];
echo "<hr> Port Number ::   ";
print $_SERVER['SERVER_PORT'];
echo "<hr>";
echo $_SERVER['SCRIPT_URI'];
?>



</body>


</html>