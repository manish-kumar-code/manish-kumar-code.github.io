<?php
  require('connection.php');
  session_start();
  if(isset($_POST['login']))
  {
    $query = "SELECT * FROM pendingapproval WHERE  email='$POST[email_username]' OR username='$POST[email_username]' ";
    $result = mysqli_query($con,$result);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $resul_fetch = mysqli_fetch_assoc($result); 
            if(password_verify($POST['password'],$resul_fetch['password']))
            {
                $_SESSION['logged in']=true;
                $_SESSION['username']=$resul_fetch ['username'];
                header("location:index.php");
            }
            else
            {
                echo "<script>alert('Incorrect Password'); window.location.href='index.php';</script>";
            }
        }
        else
        {
            echo "<script>alert('Email or Username not Registered'); window.location.href='index.php';</script>";
        }
    }
    else
    {
        echo "<script>alert('Cannot Run Query'); window.location.href='index.php';</script>";
    }
  }

  if(isset($POST['signup']))
  {
    $user_exist_query="SELECT * FROM pendingapproval WHERE username='$POST[username]' OR email='$POST[email]'";
    $result = mysqli_query($con,$user_exist_query);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                echo "<script>alert('$result_fetch[username]-Username already taken'); window.location.href='index.php';</script>";
            }
            else
            {
                echo "<script>alert('$result_fetch[email]-Email already registered'); window.location.href='index.php';</script>";
            }
        }
        else
        {
            $name = $_POST['name'];
            $id = $_POST['id'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $conpassword = $_POST['conpassword'];
            $query = "INSERT INTO `pendingapproval` ( `name`, `id`, `email`, `phone`, `password`, `conpassword`, `verification_code`, `is_verified`) VALUES ('$name', '$id', '$email', '$phone', '$password', '$conpassword', '$v_code', '0');";
            if(mysqli_query($con,$query))
            {
                echo "<script>alert('REgisteration Successful'); window.location.href='index.php';</script>";
            }
            else
            {
                echo "<script>alert('Cannot Run Query'); window.location.href='index.php';</script>";
            }
        }
    }
    else
    {
        echo "<script>alert('Cannot Run Query'); window.location.href='index.php';</script>";
    }
  }
?>