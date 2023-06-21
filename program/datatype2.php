<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
    echo  "<h1>Data type in php </h1>";
    // 1.String
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";

    // 2.integer
    $var = 65;
    echo "<br>";
    echo var_dump($var);

    // 3.float
    $var = 65.6;
    echo "<br>";
    echo var_dump($var);

    // 4.Boolean
    $var = true;
    echo "<br>";
    echo var_dump($var);
     
    // 5.Array 
    // 6.Object

    // Constant define
    echo "<br>";
    define('pi', 3.14);
    echo pi;

    ?>
    </div>
  

</body>
</html>