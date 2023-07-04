<html>
  <head>
    <title>Display</title>
  <style>
    .update, .delete
    {
      background-color: green;
      color: white;
      border: 0;
      outline: none;
      cursor: pointer;
    }
    .delete
    {
      background-color: red;
    }
  </style>  
</head>
</html>
<?php
error_reporting(0);
include("connection.php");
$query = "SELECT * FROM boots";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

// echo $total;

if($total != 0)
{
  ?>
<h2 align="center">All Records</h2>
<center>
<table border="1" cellspacing="7" width="100%">
  <tr>
  <th width="10%">ID</th>
  <th width="10%">name</th>
  <th width="10%">age</th>
  <th width="10%">gender</th>
  <th width="20%">email</th>
  <th width="10%">phone</th>
  <th width="10%">address</th>
  <th width="10%">Operations</th>
</tr>
  <?php
   while($result = mysqli_fetch_assoc($data))
   {
    echo "<tr>
            <td>".$result['id']."</td>
            <td>".$result['name']."</td>
            <td>".$result['age']."</td>
            <td>".$result['gender']."</td>
            <td>".$result['email']."</td>
            <td>".$result['phone']." </td>
            <td>".$result['address']."</td>
            <td><a href='update.php?id=$result[id]'><input type='submit' value='Update' class='update'></a> 
            
             <a href='delete.php?id=$result[id]'><input type='submit' value='Delete' class='delete' onclick='return  checkdelete()'></a></td>
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

<script>
  function checkdelete()
  {
    return Confirm('Are you sure you want to delete this record ?');
  }
</script>