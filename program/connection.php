<?php


  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname="fman";
  $con = mysqli_connect($server, $username, $password,$dbname);

  if($con)
  {
    // echo "connection ok";
     
  }
  else
   {
    echo "connection  failed" . mysqli_connect_error();
  }

  ?>