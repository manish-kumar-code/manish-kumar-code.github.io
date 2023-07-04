<?php include('header.php')?>

<nav class="navbar navbar-expand-lg navbar-light bg-fluit">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <!-- Avatar -->
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle d-flex align-items-center"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false">
          <img src="logo.png" class="rounded-circle" height="40" alt="Logo of IIST" loading="lazy"/>SIGN UP
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="index.php">Home</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="admin/dashboard.php">Dashboard</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </li>
        </ul>
      </li>
    </ul>
    <div class="d-flex align-items-center">
      <?php if(isset($_SESSION['login'])) {?>
         <i class="fas fa-user mr-2">Account</i> 
        <?php } 
        else {?>
        <button type="button" class="btn btn-link px-3 me-2"> <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>
          Login</a>
        </button>
        <!-- <button type="button" class="btn btn-link px-3 me-2"> <a href="signup.php" class="nav-link"> 
          Sign up</a>
        </button> -->
       <?php }?>
      </div>
  </div>
</nav>
 
    <!-- <div class="class=container text-center"> -->
    <section  class="bg-iistT.png vh-100 d-flex ">
    <!-- <img src="IIST.png" height="50%"> -->
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
                <h2><center>Upload File</center></h2>
                  <form action="" method="post">
                    
                    Name: <input type="text" name="name" id="name"   placeholder="Username" required>
                    <br><br>
                    Student Id: <input type="id" name="id" id="id"   placeholder="Id"required >
                    <br><br>
                    E-Mail: <input type="email" name="email" id="email" placeholder="Email" required>
                    <br><br>
                    Contact No.: <input type="phone" name="phone" id="phone" placeholder="Mobile Number" required>
                    <br><br>
                    Institute: <input type="text" name="college" id="college" placeholder="College Name" required>
                    <br><br>
                    Topic: <input type="text" name="topic" id="topic" placeholder="Topic Name" required>
                    <br><br>
                    <label>Uploading Files</label>
                    <p><input type="file" name="file"></p>
                    
                    <br><br>
                    <div class="text-center">
                      <button class="btn btn-secondary" name="submit">Upload</button>
                      <!-- <button class="btn btn-secondary" name="reset">Reset</button> -->
                  </div>
                  </form>
                 <!-- <button class="btn">Submit</button>
                  <button class="btn">Reset<button> -->
                   
            </div>
        </div>
    </div>
  </section>
  
<?php include('footer.php')?>
<?php

if (isset($_POST['name']))
 {
  $server = "localhost"; 
  $username = "root";
  $password = "";
  $con = mysqli_connect($server, $username, $password,'file');

  if(!$con)
  {
    die("connection to this database failed due to".mysqli_connect_error());
  
  }
 
 // echo "Successs connecting to the db";

  $name = $_POST['name'];
  $id =  $_POST['id'];
  $email =  $_POST['email'];
  $phone =   $_POST['phone'];
  $institute =  $_POST['institute'];
  $topic =  $_POST['topic'];
  
  // $v_code = bin2hex(random_bytes(16));
  $sql="INSERT INTO `student` (`sno.`, `name`, `id`, `email`, `phone`, `institute`, `topic`, `file`) VALUES (NULL, '$name', '$id', '$email', '$phone', '$institute', '$topic', '');";
  // INSERT INTO `student` (`sno.`, `name`, `id`, `email`, `phone`, `institute`, `topic`, `file`) VALUES (NULL, 'anish', 'IS00195', 'anish@gmail.com', '951247359', 'CENTRAL UNIVERSITY OF JAMMU', 'Website', '');
  echo $sql;

  if ($con->query ($sql) == true) 
  {
    echo "Successfully inserted";
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