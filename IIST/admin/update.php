<?php include("../includes/config.php")?>

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
$Sno= $_GET['Sno'];

$query = "SELECT * FROM store where Sno='$Sno'";
$data = mysqli_query($con,$query);

$total = mysqli_num_rows($data);
($result = mysqli_fetch_assoc($data));
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link href="https://admission.iist.ac.in/internship/template/default/css/default.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="https://admission.iist.ac.in/internship/template/default/css/htmlDatePicker.css" type="text/css" media="all">
        <link href="https://admission.iist.ac.in/internship/template/default/css/jquerysctipttop.css" rel="stylesheet" type="text/css" media="all">
        <script type="text/javascript" src="https://admission.iist.ac.in/internship/template/default/js/htmlDatePicker.js"></script>
        <script type="text/javascript" src="https://admission.iist.ac.in/internship/template/default/js/validation.js"></script>
        <script type="text/javascript" src="https://admission.iist.ac.in/internship/template/default/js/jquery-1.11.1.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>IIST INTERN INFO</title>
</head>
<body>
    <div id="header">
        <div id="logo">
            <h1>
                <img width="7%" height="8%" src="https://admission.iist.ac.in/internship/template/default/images/logo.gif" alt="">
                "IIST INTERNSHIP RECORDS"
            </h1>
            <h2>Indian Institute of Space Science and Technology</h2>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

<div class=" container">
    <form action="#" method="POST">
    <center><div class="title">
        <h1>APPROVE STUDENT DETAILS</h1>
    </div><center><br><br><br>
    <div class="form">
    <div class="input_field">
            <center><label>Type user S.no. to approve</label></center>
            <center><input type="text" value="<?php echo $result['Sno']; ?>"class="input" name="Sno"></center><br><br><br><br>
        </div>
        <div class="input_field">
        <center><input type="submit" value="Approve USER" class="btn" name="APPROVE"></center>        
    </div>
    </div>
</form>
</div>

<?php
  if($_POST["APPROVE"])
  {
    $Sno=$_POST['Sno'];
    $query = "UPDATE store SET type='approved' WHERE Sno='$Sno'";
    //echo $query;
    $data = mysqli_query($con,$query);

    if($data)
    {
        echo "<script>alert('User Approved')</script>";
        ?>

        <meta http-equiv="refresh" content="0; URL=http://127.0.0.1/site/IIST/admin/approve.php" />

        <?php
    }
  }
?>
</body>
</html>