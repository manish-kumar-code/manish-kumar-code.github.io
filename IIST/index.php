<?php include('header.php')?>


<nav class="navbar navbar-expand-lg navbar-light bg-fluit">

  <div class="container-fluid">
    <div>
      <img src="logo.png" class="rounded-circle" height="40"  alt="Logo of IIST" loading="lazy"/><big>IIST</big>
    </div>
       <div class="d-flex align-items-center">
      <?php if(isset($_SESSION['login'])) {?>
         <!-- <i class="fas fa-user mr-2">Account</i> -->
         <ul class="navbar-nav">
      <!-- Avatar -->
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle d-flex align-items-center"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
        <i class="fas fa-user mr-2">Account</i>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
         
        <?php } 
        else {?>
        <button type="button" class="btn btn-link px-3 me-2"> <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>
          Login</a>
        </button>
        <button type="button" class="btn btn-link px-3 me-2"> <a href="signup.php" class="nav-link"> 
          Sign up</a>
        </button>
       <?php }?>
      </div>
  </div>
</nav>

<div class="d-flex" style="height:500px;background:linear-gradient(-45deg, navy 50%, trasparent 50%)">
    <div class="container-fluid bg-flute">
      <div class="row">
        <div class="col-lg-6 my-auto">
        <h4 class="display-3 front-weight-bold"><b>Summer Internship Programme</b></h4>
        </div>
      </div>
    </div>
  </div>
  <?php include('footer.php')?>