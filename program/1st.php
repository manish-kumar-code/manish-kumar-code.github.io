<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Form</title>
</head>
<body>
    <div class="container">
        <h2>IIST Thiruvananthapuram  </h2>
        <p>Registeration Form</p>
        <form action="1st.php" method="post">
            Name: <input type="text" name="name" id="name" placeholder="Enter your name">
            <br><br>
            Age: <input type="text" name="age" id="age" placeholder="Enter your age">
            <br><br>
            Gender: <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <br><br>
            E-Mail: <input type="email" name="email" id="email" placeholder="Enter your email">
            <br><br>
            Contact No.: <input type="phone" name="contact" id="phone" placeholder="Enter your phone">
            <br><br>
            Feedback: <textarea name="feedback" id="desc" cols="20" rows="10" placeholder="Enter any other information"></textarea>
            <br>
            <button class="btn">Submit</button> 
            <button class="btn">Reset<button>            

        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['name']))
{
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server,$username,$password,'fman');

if(!$con)
{
    die("connection to this database failed due to" .mysqli_connect_error());
}


$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$feedback = $_POST['feedback'];

$sql = "insert into `index` (`name`, `age`, `gender`, `email`, `contact`, `feedback`) VALUES ('$name', '$age', '$gender', '$email', '$contact', '$feedback');";
echo $sql;

if($con->query($sql) == true)
{
    echo "Successful inserted";
}
else 
{
    echo "ERRor:$sql <br> $con->error";
}
$con->close();
}
?>
