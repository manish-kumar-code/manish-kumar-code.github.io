<?php
include("connection.php");
$id = $_GET['id'];
$query ="DELETE FROM boots WHERE id= '$id'";
$data =mysqli_query($con,$query);

if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content ="0; url =http://127.0.0.1/program/display.php"/>
    <?php
}
else
{
    echo "<script>alert('Failed to Delete')</script>";
}
?>