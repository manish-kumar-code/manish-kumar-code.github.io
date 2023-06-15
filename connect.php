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