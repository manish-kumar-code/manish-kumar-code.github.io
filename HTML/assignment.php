<? include("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Registration Form</h3>
    <form action="connect.php " method="post">
         Student Name : <input type="text" placeholder="NAME" name="Name" >
        <br />
        <br />
        Date of Birth :  <input type="date" placeholder="DD-MM-YYYY" name="date">
        <br />
        <br />
        Contact No. : <input type="tel"  placeholder="1234-567-890" name="tel" >
        <br />
        <br />
        Student E-mail : <input type="text" placeholder="ex:mani124@gmail.com" name="id" >
        <br />
        <br />
         
         Gender :<select name="Gender">
                  <option placeholder="Please Select">Please Select</option>
                  <option value="Male">Male</option>
                  <option value="Female">female</option>
                 </select>         
        <br />
        <br />
        Address : <input type="text"  placeholder=" " name="add" length="250" width="250">
        <br />
        <br />
        <input type="submit" value="submit">
        <input type="Reset" value="Reset">
<?php
if(isset($_POST['Name']) && isset($_POST['date']) && isset($_POST['tel']) && isset($_POST['id']) && isset($_POST['Gender']))
{ 
   $Name = $_POST['Name'];
   $date = $_POST['date'];
   $tel = $_POST['tel'];
   $id = $_POST['id'];
   $Gender = $_POST['Gender'];
   $add=$_POST['add'];
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="fman";
   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if($conn->connect_error)
   {
      die('connection Failed : '.$conn->connect_error);
   }
   else
   {
      $stmt=$conn->prepare("insert into register1(Name,tel,id,add,Gender,date) values(?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("sisssi",$Name,$tel,$id,$add,$Gender,$date);
      $stmt->execute(); 
      echo "registeration successfully..";
      $stmt->close();
      $conn->close();
   }
}

?>
</body>
</html>