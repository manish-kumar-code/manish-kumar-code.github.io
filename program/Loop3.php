<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .containert
    max-width: 80%;
    background-color: grey;
    margin: auto;
    padding: 23px;

</style>
<body>
    <div class="container">
    <p> Your party status is here:</p>
        <?php
        $age = 1;
        if($age>18)
        {
            echo"You can go to the party";
        }
        elseif($age==9)
        {
            echo "You are 9 years old";
        }
        else
        {
            echo "You can't go to the party";
        }

        // Array in php
        echo "<br>";
        $languages = array("Python","C++","php","c");
        echo count($languages);
        echo "<br>";
        echo $languages[1];

        // Loops in php
        $a=0;
        while($a <= 10)
        {
            echo "<br>";
            echo "The value of a is :";
            echo $a;
            $a++;
        }
        echo "<br>";

        // Iterating arrays in php using while loop
        $a = 0;
        while($a < count($languages))
        {
            echo "<br>";
            echo "The value of a is :";
            echo $languages[$a];
            $a++;
        }
        echo "<br>";

        //    Do while loop
        $a = 0;
        do
        {
            echo "<br>";
            echo "The value of a is :";
            echo  $a;
            $a++;
        }while($a < 10);
        echo "<br>";

         //    for loop
         for ($a=0; $a < 10; $a++) { 
            echo "<br>";
            echo "The value of a from the for loopis :";
            echo  $a;
         } 
         echo "<br>";
         foreach($languages as $value)
         {
            echo "<br>";
            echo "The value from foreach loop is :";
            echo $value; 
         } 
         echo "<br>";  
         function print5()
           {
                echo "FIVE";
            }
            print5(); 
            print5();
            print5(); 
            print5();
            function print_number($number)
            {
                echo "<br>";
                echo "Your number is";
                echo $number;
            }
            print_number(45);
            print_number(435);
                                 
        ?>
        
    </div>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
    .containert
    max-width: 80%;
    background-color: grey;
    margin: auto;
    padding: 23px;

</style>
<body>
    <div class="container">
    <p> Your party status is here:</p>
        <?php
        $age = 1;
        if($age>18)
        {
            echo"You can go to the party";
        }
        elseif($age==9)
        {
            echo "You are 9 years old";
        }
        else
        {
            echo "You can't go to the party";
        }

        // Array in php
        echo "<br>";
        $languages = array("Python","C++","php","c");
        echo count($languages);
        echo "<br>";
        echo $languages[1];

        // Loops in php
        $a=0;
        while($a <= 10)
        {
            echo "<br>";
            echo "The value of a is :";
            echo $a;
            $a++;
        }
        echo "<br>";

        // Iterating arrays in php using while loop
        $a = 0;
        while($a < count($languages))
        {
            echo "<br>";
            echo "The value of a is :";
            echo $languages[$a];
            $a++;
        }
        echo "<br>";

        //    Do while loop
        $a = 0;
        do
        {
            echo "<br>";
            echo "The value of a is :";
            echo  $a;
            $a++;
        }while($a < 10);
        echo "<br>";

         //    for loop
         for ($a=0; $a < 10; $a++) { 
            echo "<br>";
            echo "The value of a from the for loopis :";
            echo  $a;
         } 
         echo "<br>";
         foreach($languages as $value)
         {
            echo "<br>";
            echo "The value from foreach loop is :";
            echo $value; 
         } 
         echo "<br>";  
         function print5()
           {
                echo "FIVE";
            }
            print5(); 
            print5();
            print5(); 
            print5();
            function print_number($number)
            {
                echo "<br>";
                echo "Your number is";
                echo $number;
            }
            print_number(45);
            print_number(435);
                                 
        ?>
        
    </div>
</body>
>>>>>>> 4a490459c2559517f13a29ec00b5f7a2e7ff7d0f
</html>