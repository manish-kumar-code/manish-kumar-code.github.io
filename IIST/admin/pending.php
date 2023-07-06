<?php include("../includes/config.php")?>
<?php include("header.php")?>
<?php include("sidebar.php")?>
 
<?php
error_reporting(0);
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname="file";
  $con = mysqli_connect($server, $username, $password, $dbname);

  if($con)
  {
    // echo "connection ok";
     
  }
  else
   {
    echo "connection  failed" . mysqli_connect_error();
  }
$query ="SELECT * FROM `store` WHERE `type` LIKE 'pending'";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

// echo $total;

if($total != 0)
{
  ?>
<h2 align="center">PENDING USERS</h2>
<center>
<table border="1" cellspacing="7" width="78%">
  <tr>
  <th width="5%">S.NO.</th>
  <th width="20%">NAME</th>
  <th width="10%">ID</th>
  <th width="25%">EMAIL</th>
  <th width="10%">MOBILE NO.</th>
  <th width="8%">ACTION</th>
</tr>
  <?php
   while($result = mysqli_fetch_assoc($data))
   {
    echo "<tr>
            <td>".$result['Sno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['id']."</td>  
            <td>".$result['email']."</td>
            <td>".$result['phone']." </td>
            
            <td><a href='update.php?Sno=$result[Sno]'><input type='submit' value='APPROVE' class='approve'></a></td>
            
          </tr>";
   }
}
else
{
  echo "No records found";
}

?>

</table>
</center>
   

<?php include("footer.php")?>