<<<<<<< HEAD
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
=======
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
>>>>>>> 4a490459c2559517f13a29ec00b5f7a2e7ff7d0f
?>