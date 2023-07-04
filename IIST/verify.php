<?php
  require("connection.php");
  if(isset($_GET['email']) && isset($_GET['v_code']))
  {
    $querry = "SELECT * FROM pendingapproval WHERE email = '$_GET[email]' AND verification_code ='$_GET[v_code]'";
    $result = mysqli_query($con,$query);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==0)
            {
                $update="UPDATE pendingapproval SET is_verified='1' WHERE email='$result_fetch[email]'";
                if (mysqli_query($con,$update))
                {
                    echo "<script>alert('Email verification successful'); window.location.href='';</script>";
                }
                else
                {
                    echo "<script>alert('Cannot run querry'); window.location.href='';</script>";
                }
            }
            else
            {
                echo "<script>alert('Email already registered'); window.location.href='';</script>";
            }
        }

    }
    else
    {
      echo "<script>alert('Cannot run querry'); window.location.href='';</script>";  
    }
  }
?>