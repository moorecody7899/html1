<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP week 1</title>
</head>
<body>
<?php
echo 'Hello World';

     
      
        $x = 2;
        $y = 6;

      
        echo $x = $y;
        echo "<br>";

      
        echo $x += $y;
        echo "<br>";

    
        echo $x -= $y;
        echo "<br>";

       
        echo $x *= $y;
        echo "<br>";

    
        echo $x /= $y;
        echo "<br>";

      
        echo $x %= $y;
        echo "<br>";
        
        echo 'The value of $x is equal to $y: ';
        echo var_dump($x == $y);
        echo "<br>";
       
        echo 'The value of $x is not equal to $y: ';
        echo var_dump($x != $y);
        echo "<br>";
        
        echo '$x is identical to $y: ';
        echo var_dump($x === $y);
        echo "<br>";
        
        echo '$x is not identical to $y: ';
        echo var_dump($x !== $y);
        echo "<br>";
        
        echo '$x is greater than $y: ';
        echo var_dump($x > $y);
        echo "<br>";
        
         echo '$x is less than $y: ';
         echo var_dump($x < $y);
         echo "<br>";
         
          echo '$x is greater than or equal to $y: ';
          echo var_dump($x >= $y);
          echo "<br>";
          
           echo '$x is less than or equal to $y: ';
           echo var_dump($x <= $y);
           echo "<br>";
	







?>
    
</body>
</html>
