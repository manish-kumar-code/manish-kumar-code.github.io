 <?php
 if(isset($_POST['Name']) && isset($_POST['date']) && isset($_POST['tel']) && isset($_POST['id']) && isset($_POST['Gender']))
 {
$Name = $_POST['Name'];
$date = $_POST['date'];
$tel = $_POST['tel'];
$id = $_POST['id'];
$add=$_POST['add'];
$Gender = $_POST['Gender'];
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
   $stmt=$conn->prepare(" insert into register1(Name,tel,id,add,Gender,) values(?, ?, ?, ?, ?)");
   $stmt->bind_param("sisssi",$Name,$tel,$id,$add,$Gender,$date);
   $stmt->execute();
   echo "registeration successfully..";
   $stmt->close();
   $conn->close();
   
}
}
 ?>