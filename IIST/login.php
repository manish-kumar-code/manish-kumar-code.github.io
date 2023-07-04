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
          aria-expanded="false"
        >
          <img src="logo.png" class="rounded-circle" height="40" alt="Logo of IIST" loading="lazy"/>LOGIN
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
        <!-- <button type="button" class="btn btn-link px-3 me-2"> <a href="login.php" class="nav-link"><i class="fa fa-user mr-2"></i>
          Login</a>
        </button> -->
        <button type="button" class="btn btn-link px-3 me-2"> <a href="signup.php" class="nav-link"> 
          Sign up</a>
        </button>
       <?php }?>
      </div>
  </div>
</nav>

<section class="bg-iistT.png vh-100 d-flex">
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
                <form action="actions/login.php" method="POST">
                <div class="border rounded-circle mx-auto d-flex" style="width:100px;height:100px"><i class="fa fa-user text-black fa-3x m-auto"></i></div>
                <h4>Select User</h4>
                <label for="id1">
                <input type="radio" value="admin" name="user" id="id1" >Admin
                </label>
                <label for="id1">
                  <input type="radio" value="student" name="user" id="id1" >Student
                </label>
                <label for="id1">
                  <input type="radio" value="teacher" name="user" id="id1" >Teacher
                </label>
                

                <div class="md-form">
                    <input type="email" id="email" name="email" class="form-control">
                    <label for="email">Username or Email<label>
                </div>
                <div class="md-form">
                    <input type="password" id="password" name="password" class="form-control">
                    <label for="password">Password<label>
                </div>
                <div class="text-center">
                <button class="btn btn-secondary" name="login">Login</button>
                </div>
                <button class="btn btn-secondary" name="password">Forget Password</button>
                <button class="btn btn-secondary" name="password">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php')?>