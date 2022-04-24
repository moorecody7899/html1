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
echo "<br>";




     
      
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
           echo "<br>";
           $newVar1 = "I love burgers at lucky13!<br>";
           echo $newVar1;
           echo "<br>";
           $newVar2 = "lobster pasta is the best!<br>";
           echo $newVar2;
           $varString1 = "I love Beers! <br>";
           echo "<br>";
           $varString2 = "I love tacos <br>";
           echo "<br>";
           echo $varString1;
           echo "<br>";
           echo $varString2;
           echo "<br>";
           echo "<br>";
           
           $varArray = [ 'Tacos', 'Burgers', 'Lobster', 'Beer', ];
           print_r ($varArray); 

           echo "<br>";

           Echo "This ". "was ". " a ". "fun ". "string! ";

           $Date = date("M. d, Y");
           echo "Anyways this is". $Date.  "And now im hungry!";
           echo str_replace('love', 'Hate', 'I love Burger the Most!'); echo "<br>";
           echo "<br>";
           echo str_word_count('I love Burger the Most!'); echo "<br>";
          
	







?>
    
</body>
</html>
