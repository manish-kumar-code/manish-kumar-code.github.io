<?php
include("connection.php");
$id = $_GET['S.no.'];
$query ="DELETE FROM  pendingapproval WHERE S.no.= '$id'";
$user = mysqli_query($con,$query);

if($user)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content ="0; url=http://127.0.0.1/site/IIST/admin/user-accounts.php?user=pending"/>
    <?php
}
else
{
    echo "<script>alert('Failed to Delete')</script>";
}
?>