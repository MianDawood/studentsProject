<!DOCTYPE html>
<html lang="en">

<?php require 'process/connection.php';?>

<?php require 'process/security.php';?>

<?php require 'include/head.php' ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php require 'include/navbar.php' ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require 'include/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Cities</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">City</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row ">
          <!-- left column -->
          <div class="col-md-12 ">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="">
                

                <?php
                if(isset($_GET['msg']) && $_GET['msg']=='Congratulation! you submit successfully' ){
                    echo "
                    <h6 class='alert alert-success alert-dismissible fade show'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>".
                    $_GET['msg']."</h6>";
                }
                elseif(isset($_GET['msg']) && $_GET['msg']=='Sorry! you not submit successfully try again...' ){
                  echo "
                  <h6 class='alert alert-danger alert-dismissible fade show'>
          <button type='button' class='close' data-dismiss='alert'>&times;</button>".
                  $_GET['msg']."</h6>";
              }
              else{
                echo "<h6 class='alert alert-secondary'>City</h6>";
              }
                
      //     if(isset($_GET['msg']) && $_GET['msg']=='Congratulation! your form submit successfully' ){
      //       echo "
      //       <h5 class='alert alert-success'>".
      //       $_GET['msg']."</h5>";
      //   }
      //   elseif(isset($_GET['msg']) && $_GET['msg']=='Sorry! your form is not submit successfully try again...' ){
      //     echo "
      //     <h6 class='alert alert-danger'>".
      //     $_GET['msg']."</h6>";
      // }
      // else{
      //   echo 'Registration';
      // }
         
              ?>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
              <form action="process/city_insertion.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Village</label>
                    <input type="text" name="village" placeholder="Enter Village" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" placeholder="Enter City"  class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Province</label>
                      <input type="text" name="province" placeholder="Enter Province"  class="form-control">
                      <div class="form-group">
          </div>
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                
                <!-- /.card-body -->
                <div>

                  <input type="hidden" name="hide" value="student">

                  <button type="submit" class="btn btn-outline-success">Submit</button>
                  <button type="reset" class="btn btn-outline-warning">Reset</button>
                </div>
              </form>

            </div>
            <!-- /.card -->

            <!-- general form elements -->
            <div class="card card-primary">
             
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'include/footer.php' ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
