<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

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