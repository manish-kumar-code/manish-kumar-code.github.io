<?php
include("connection.php");
$id = $_GET['id'];
$query = "SELECT * FROM boots where id ='$id'";
$data = mysqli_query($con,$query);

$result = mysqli_fetch_assoc($data);
?>
 <!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h2>IIST Thiruvananthapuram </h2>
    <p>Update Form</p>
    <!-- <?php
    $insert = false;
    if($insert == true)
    {
    echo "<p class='submitmsg'>Thanks for submittingyour form.</p>";
    }
    ?> -->
    <form action="boots.php" method="post">
      Name: <input type="text" value = "<?php echo $result['name']; ?>" name="name" id="name" placeholder="Enter your name">
      <br><br>
      Age: <input type="text" value = "<?php echo $result['age']; ?>" name="age" id="age" placeholder="Enter your age">
      <br><br>
      Gender: <input type="text" value = "<?php echo $result['gender']; ?>" name="gender" id="gender" placeholder="Enter your gender">
      <br><br>
      E-Mail: <input type="email"value = "<?php echo $result['email']; ?>" name="email" id="email" placeholder="Enter your email">
      <br><br>
      Contact No.: <input type="phone"value = "<?php echo $result['phone']; ?>" name="phone" id="phone" placeholder="Enter your phone">
      <br><br>
      Address: <textarea name="address" id="address" cols="10" rows="10"
        placeholder="Enter any other information"> <?php echo $result['address']; ?> </textarea>
      <br>
      <button class="btn">update</button>
      <button class="btn">Reset<button>

    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['update'])) {
 
// echo "Successs connecting to the db";

  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  $query = "UPDATE boots set name='$name',  age='$age', gender='$gender',email='$email', phone='$phone', address='$address WHERE id='$id'";
  // echo $sql;

  if ($con->query ($sql) == true) 
  {
    echo "<script>alert('Record Update')</script>";
    ?>
     <meta http-equiv="refresh" content ="0; url =http://127.0.0.1/program/display.php"/>

    <?php
    
  
    // $insert = true;
  }
   else 
  {
    echo "Error:$sql <br> $con->error";
    // $not_insert = true;
  }
  $con->close();
}
?>
