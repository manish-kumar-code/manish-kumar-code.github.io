<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Registeration Form  </h2>
    <form action="connect.php" method="post">
        <input type="text" placeholder="Username" name="Username">
        <br />
        <br />
        <input type="Password" placeholder="Password" name="password">
        <br />
        <br />
        <h4>Select Class</h4>
        <label for="id1">
        <input type="radio" value="class XI" name="class" id="id1" >class XI
    </label>
        <br />
        <label for="id2">
        <input type="radio" value="class XII" name="class" id="id2" >class XII
    </label>
        <br />
        <h4>Select Subject</h4>
        <label for="computer">
            <input type="radio" value="computer" name="subject" id="id1">Computer
        </label>
        <br />
        <br />
        <label for="math">
            <input type="radio" value="math" name="subject" id="id2">Math
        </label>
        <br />
        <br />
        <label for="physics">
            <input type="radio" value="physics" name="subject" id="id3">Physics
        </label>
        <br />
        <br />
        <label for="english">
            <input type="radio" value="english" name="subject" id="id4 ">English
        </label>
        <br />
        <br />
        <label for="chem">
            <input type="checkbox" value="chem" name="subject" id="id1">Chemistry
        </label>
        <br />
        <br />
        Select City
        <select name="city" id="city">
            <option value="Delhi">Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Banglore">Banglore</option>
            <option value="Kerla">Kerla</option>
            <option value="Others">Others</option>
        </select>
        <br />
        <br />
        <input type="text" placeholder="city " name="city">
        <br />
        <br />
        <textarea name="feedback" id="id1" placeholder="Please give your feedback">Feedback</textarea>
        <br />
            <input type="submit" value="submit"> </input> 
    </form>
</body>
</html>
<?php
     $username =$_POST['username'];
     $password =$_POST['password'];
     $class =$_POST['class'];
     $subject =$_post['subject'];
     $city =$_post['city'];
     $feedback =$_post['feedback'];

     $conn =new mysqli('localhost','root','','test');
     if($conn->connect_error)
     {
        die('connection Failed : '.$conn->connect_error);
     }
     else
     {
        $stmt=$conn->prepare("Insert into registration(username,password,class,subject,city,feedback ) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$username,$password,$class,$subject,$city,$feedback);
        $stmt->execute();
        echo "registeration successfully..";
        $stmt->close();
        $conn->close();
     }
      
  ?>