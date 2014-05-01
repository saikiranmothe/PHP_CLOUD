<h1>Opertors in PHP</h1>
<?php 
$hr = "<hr>";
$x=10; 
$y=6;
	echo ($x + $y); // outputs 16
	echo($hr);
	echo ($x - $y); // outputs 4
	echo($hr);
	echo ($x * $y); // outputs 60
	echo($hr);
	echo ($x / $y); // outputs 1.6666666666667 
	echo($hr);
	echo ($x % $y); // outputs 4 
?>
<hr>
<h1 style="text-align:right">CONSTANTS</h1>
<?php 
 echo($hr);
 $a = 20;
 $b = 10;
 echo ($a + $b); # O/P =  30
 echo($hr);
 echo ($a - $b);  #  10
 echo($hr);
 echo($a * $b);  # 200
 echo($hr);
 echo($a / $b ); # 2
 echo($hr);
 echo($a % $b); # 0
?>

<h3> Assignment Operators</h3>
<?php 
#PHP Assignment Operators
//Assignment operators
/* 

	x = y	x = y	The left operand gets set to the value of the expression on the right
	x += y	x = x + y	Addition
	x -= y	x = x - y	Subtraction
	x *= y	x = x * y	Multiplication
	x /= y	x = x / y	Division
	x %= y	x = x % y	Modulus
*/

	$x = 12;
	$y = 11;
	/*  
		x = y	x = y	The left operand gets set to the value of the expression on the right
		x += y	x = x + y	Addition
		x -= y	x = x - y	Subtraction
		x *= y	x = x * y	Multiplication
		x /= y	x = x / y	Division
		x %= y	x = x % y	Modulus

	*/
	echo $x = $y;	//x = y
	echo $hr;  
	echo $x++;
	echo($hr); 
	echo(+$x); // Post INCREMENT
	echo($hr);
	echo($x += $y); // x + y 
	echo($hr);
	echo($x -= $y);  // x - y
	echo($hr);
	echo($x %= y)

?>

<!-- Example :P -->
<?php 

$x=10; 
echo $x; // outputs 10
echo($hr);

$y=20; 
$y += 100;
echo $y; // outputs 120
echo($hr);

$z=50;
$z -= 25;
echo $z; // outputs 25
echo($hr);


$i=5;
$i *= 6;
echo $i; // outputs 30
echo($hr);


$j=10;
$j /= 5;
echo $j; // outputs 2
echo($hr);


$k=15;
$k %= 4;
echo $k; // outputs 3
echo($hr);

?>