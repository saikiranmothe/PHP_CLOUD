<!DOCTYPE html>
<html>
<head>
      <title>
        <?php echo "DATATYPES IN PHP";  ?>
      </title>
</head>
<body>
      <?php echo 
            /*  
            **************************
              Data Types & Variables
            ************************* 
            */
            $hr = "<hr>";
            #Integers
            $int1  = 12;   # values passed to Variable
            $int2 = -12;  //rational number passed to variable
            $int3 = 012;   #octal number passed to variable
            $int4 = 0X0f; // => 15  HEX number

            //Floating Number 
            $float = 1.234;
            $float1 = 3.23;
            $float4 = 4.56778;
                 /*  
            **************************
             Print Variables
            ************************* 
            */
            echo $int1;
            echo $hr;
            echo $int2;
            echo $hr;
            echo $float;

       ?>
</body>
</html>