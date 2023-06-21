<?php
$str = "This is";
echo $str."<br>";
$lenn = strlen($str);
Echo "The length of this string is".$lenn .".Thank you <br>";
echo "The no. of words in this string is".str_word_count($str).".Thank you";
echo "<br>";
echo "The reverse string is  ".strrev($str).".Thank you";
echo "<br>";
echo "The search for is in this string is  ".strpos($str,"is").".Thank you";
echo "<br>";
echo "The replace string is  ".str_replace("is","at",$str).".Thank you";

?>