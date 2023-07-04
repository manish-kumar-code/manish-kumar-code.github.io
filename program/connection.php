<<<<<<< HEAD
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

=======
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

>>>>>>> 4a490459c2559517f13a29ec00b5f7a2e7ff7d0f
  ?>