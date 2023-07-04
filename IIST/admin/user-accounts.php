<?php include("../includes/config.php")?>
<?php include("header.php")?>
<?php include("sidebar.php")?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Manage Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Accounts</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user'])?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content"> 
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="tabel-responsive bg-blak" >
          <table class="tabel table-bordered" width="100%">
            <thead>
              <tr>
                <th width="10%">S.No.</th>   
                <th width="20%">Name</th>
                <th width="10%">Student id</th> 
                <th width="20%">Email</th> 
                <th width="20%">Contact No.</th> 
                <th width="20%">Action</th> 
              </tr> 
            </thead>
            <tbody>
              <?php
                $count = 1;
                $user_query = 'SELECT * FROM `store` WHERE `action`="'.$_REQUEST['user'].'"';
                $user_result = mysqli_query($db_conn , $user_query); 
                while ($users = mysqli_fetch_object($user_result))
                {  echo "<br>"; 
              ?>
              <br>
              <tr>
                <td><?=$count++?></td>
                <td><?=$users->name?></td>
                <td><?=$users->id?> </td>
                <td><?=$users->email?></td>
                <td><?=$users->phone?></td>
                <td>
                
                <div class="text-center">
                <!-- <label for="id1">
                <input type="checkbox" value="approved" name="user" id="id1" >Approved
                </label> -->
                      <!-- <input type='submit' value='Pending' class='update'> -->
                      <button class="btn btn-secondary" name="approved"><a href="approved.php">Approved</a></button> 
                      <button class="btn btn-secondary" name="delete"><a href="delete.php">Delete</a></button> 
                  </div>           
                </td>                
              </tr>
              <?php  }?>
            </tbody> 
          </tabel>         
        </div>
        <!-- /.row -->
     </div>
    </section>
<?php include("footer.php")?>