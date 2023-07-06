<?php
include("../includes/config.php");
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($db_conn,"SELECT * FROM  `store` WHERE  `email`='$email' AND  `password`='$password'");

    if(mysqli_num_rows($query)>0)
    {
        $user=mysqli_fetch_object($query);
        $_SESSION['login'] = true;
        $_SESSION['session_id'] = uniqid();
        $user_type='approved';
        print_r($user);
        header('location: ../student/dashboard.php');
    }

    else 
    if($email == 'teacher@gmail.com' && $password == 'teacher@123')
    {
        session_start();
        $_SESSION['login'] = true;
        header('location: ../teacher/dashboard.php');
    }

    else

    if($email == 'admin@gmail.com' && $password == 'admin@123')
    {
        session_start();
        $_SESSION['login'] = true;
        header('location: ../admin/dashboard.php');
    }
    else
    {
        echo "Invalid Credentials";
    }
}
?>