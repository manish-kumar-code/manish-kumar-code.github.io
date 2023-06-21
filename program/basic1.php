<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first php website.
        <?php
        echo "<br>";
        echo "<br>";
        echo "Hello World !";
        echo "<br>";
        echo "<br>";
        $variable1 = 45;
        $variable2 = 5;
        $variable3 = 45665;
        echo $variable1;
        echo $variable2;
        echo $variable3;
        echo "<br>";
        echo "<br>";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "<br>";

        // Operator in PHP_
        // Arithmetic Operator
        echo "The value of variable1 + variable2 is";
        echo  $variable1 + $variable2;
        echo "<br>";
        echo "<br>";
        echo "The value of variable1 - variable2 is";
        echo  $variable1 - $variable2;
        echo "<br>";
        echo "<br>";
        echo "The value of variable1 * variable2 is";
        echo  $variable1 * $variable2;
        echo "<br>";
        echo "<br>";
        echo "The value of variable1 % variable2 is";
        echo  $variable1 % $variable2;
        echo "<br>";
        echo "<br>";

        // Assignment Operator
        $newvar = $variable1;
        // $newvar +=  1;
        $newvar *=  2;
        echo "The value of new variable is";
        echo $newvar;
        echo "<br>";

        // Comparison Operator
        echo "<h1>Comparison Operator</h1>";
        echo "The value of 1==4 is";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is";
        echo var_dump(1<=4);
        echo "<br>";

        // increment/Decrement Operator
        echo "<h1> Increment/Decrement Operator</h1>";
        echo $variable1++;
        echo "<br>";
        echo $variable1 ;

        echo $variable1--;
        echo "<br>";
        echo $variable1 ;

        echo ++$variable1;
        echo "<br>";
        echo $variable1 ;

        echo --$variable1;
        echo "<br>";
        echo $variable1 ;

        // Logical Operator
        echo "<h1> logical Operator</h1>";
        // and(&&)
        $myvar =(true and  true);
        echo "<br>"; 
        echo var_dump($myvar);   
        echo "<br>";
        $myvar =(false and true);
        echo "<br>"; 
        echo var_dump($myvar);
        echo "<br>";
        $myvar =(true and  false);
        echo "<br>"; 
        echo var_dump($myvar);
        echo "<br>";
        $myvar =(false and false);
        echo "<br>"; 
        echo var_dump($myvar);    
        
        // or(||)
        echo "<br> or";
        $myvar =(true or  true);
        echo "<br>"; 
        echo var_dump($myvar);   
        echo "<br>";
        $myvar =(false or true);
        echo "<br>"; 
        echo var_dump($myvar);
        echo "<br>";
        $myvar =(true or  false);
        echo "<br>"; 
        echo var_dump($myvar);
        echo "<br>";
        $myvar =(false or false);
        echo "<br>"; 
        echo var_dump($myvar); 

        // xor(^)
        echo "<br> xor";
        $myvar =(true xor  true);
        echo "<br>"; 
        echo var_dump($myvar);   
        echo "<br>";
        $myvar =(false xor true);
        echo "<br>"; 
        echo var_dump($myvar);
        echo "<br>";
        $myvar =(true xor  false);
        echo "<br>"; 
        echo var_dump($myvar);
        echo "<br>";
        $myvar =(false xor false);
        echo "<br>"; 
        echo var_dump($myvar);

        // not(!)
        
?>
    </div>
</body>
</html>  