<?php
   $db_conn = mysqli_connect('localhost','root','','file');
   if(!$db_conn)
   { 
    echo "Connection Failed";
   }
?>