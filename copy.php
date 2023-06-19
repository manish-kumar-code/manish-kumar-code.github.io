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
    <p>Registeration Form</p>
    <form action="index.php" method="post">
      Name: <input type="text" name="name" id="name" placeholder="Enter your name">
      <br><br>
      Age: <input type="text" name="age" id="age" placeholder="Enter your age">
      <br><br>
      Gender: <input type="text" name="gender" id="gender" placeholder="Enter your gender">
      <br><br>
      E-Mail: <input type="email" name="email" id="email" placeholder="Enter your email">
      <br><br>
      Contact No.: <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
      <br><br>
      Feedback: <textarea name="desc" id="desc" cols="20" rows="10"
        placeholder="Enter any other information"></textarea>
      <br>
      <button class="btn">Submit</button>
      <button class="btn">Reset<button>

    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['name'])) {
  $server = "localhost";
  $username = "root";
  $password = "";
  $con = mysqli_connect($server, $username, $password);

  if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
  }


  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $desc = $_POST['desc'];

  $sql = "INSERT INTO `index` (`name`, `age`, `gender`, `email`, `contact`, `feedback` ) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
  echo $sql;

  if ($con->query($sql) == true) {
    echo "Successful inserted";
  } else {
    echo "ERRor:$sql <br> $con->error";
  }
  $con->close();
}
?>