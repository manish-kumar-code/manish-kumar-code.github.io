<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Registration Form</h3>
    <form action="connect.php" method="post">
         Student Name : <input type="text" placeholder="NAME" name="Name">
        <br />
        <br />
        Date of Birth :  <input type="digit" placeholder="DD-MM-YYYY" name="DOB">
        <br />
        <br />
        Contact No. : <input type="digit"  placeholder="NUMBER" name="Number">
        <br />
        <br />
        Student E-mail : <input type="text" placeholder="ex:mani124@gmail.com" name="id">
        <br />
        <br />
        Gender :  
        <select name="Gender">
                 <option placeholder="Please Select">Please Select</option>
                 <option value="Male">Male</option>
                 <option value="Female">female</option>
                 <option value="Other">Other</option>
                </select>         
        <br />
        <br />
</body>
</html>
<?php
$Name = $_POST['Name'];
$DOB = $_POST['DOB'];
$Number = $_POST['Number'];
$id = $_POST['id'];
$Gender = $_POST['Gender'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error)
{
   die('connection Failed : '.$conn->connect_error);
}
else
{
   $stmt=$conn->prepare("Insert into registration(Name,DOB,Number,id,Gender ) values(?,?,?,?,?)");
   $stmt->bind_param("siiss",$Name,$DOB,$Number,$id,$Gender);
   $stmt->execute();
   echo "registeration successfully..";
   $stmt->close();
   $conn->close();
}
?>