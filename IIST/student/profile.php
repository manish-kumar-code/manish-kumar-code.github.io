<!-- <?php
include "connection.php";
include "navbar.php";

?> -->
<?php include("header.php")?>
<section  class="bg-iistT.png vh-100 d-flex ">
    <!-- <img src="IIST.png" height="50%"> -->
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
                <!-- <h2><center> My Profile </center></h2>
                  <form action="" method="post">
                  <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px"><i class="fa fa-user text-black fa-3x m-auto"></i></div>
                  <div><center>Welecome</center>
                      <h4>
                        <?php
                        echo $_SESSION['login_user'];
                        ?>
                      </h4>
                    </div>

                   
                  </form> -->
                  <div>
                    <?php
                    $q=mysqli_query($db,"SELECT * FROM store WHERE username='_SESSION[login_user]';");
                    ?>
                    <h2>My Profile</h2>
                    <?php
                    $row=mysqli_fetch_assoc($q);
                    echo "<div style='text-align:center'><img class='img-circle profile-img' height=100 width=110  src='images/".$_SESSION['pic']."'></div>"; 
                    ?>
                    <div><center>Welecome</center>
                      <h4>
                        <?php
                        echo $_SESSION['login_user'];
                        ?>
                      </h4>
                    </div>
                    <?php
                      echo "<tabel>";
                        echo "<tr>";
                          echo "<td>";
                            echo "<b>Name</b>";
                          echo "</td>";

                          echo "<td>";
                            echo "$row['first']";
                          echo "</td>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "</tr>";

                        echo "<tr>";
                        echo "</tr>";
                      echo "</tabel>";
                    ?>
                  </div>
            </div>
        </div>
    </div>
  </section>