<!DOCTYPE html>
<html lang="en">




<?php require 'include/head.php' ?>

<?php

require 'process/connection.php';

require 'process/security.php';

$id = $_GET['id'];

$query = "select * from add_classess where Class_ID = '$id'";

$go = mysqli_query($connect,$query);

$edit = mysqli_fetch_array($go); 

?>

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
            <h1>Student Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Class</li>
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
                if(isset($_GET['msg']) && $_GET['msg']=='Congratulation! your form submit successfully' ){
                    echo "
                    <h6 class='alert alert-success alert-dismissible fade show'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>".
                    $_GET['msg']."</h6>";
                }
                elseif(isset($_GET['msg']) && $_GET['msg']=='Sorry! your form is not submit successfully try again...' ){
                  echo "
                  <h6 class='alert alert-danger alert-dismissible fade show'>
          <button type='button' class='close' data-dismiss='alert'>&times;</button>".
                  $_GET['msg']."</h6>";
              }
              else{
                echo "<h6 class='alert alert-secondary'>Class</h6>";
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
           
              <form action="process/update_class.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>Class Name</label>
                    <input type="text" name="className" placeholder="Enter Class" value="<?php echo $edit['Class_Name']; ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Section</label>
                    <input type="text" name="section" placeholder="Enter Section" value="<?php echo $edit['Section']; ?>" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Description</label>
                      <input type="text" name="description" placeholder="Enter Description" value="<?php echo $edit['Class_Description']; ?>" class="form-control">
                      <div class="form-group">
          </div>
                
                <!-- /.card-body -->
                <div>

                  <input type="hidden" name="hide" value="student">
                   <input type="hidden" name="update" value="<?php echo $edit['Class_ID'] ?>">


                  <button type="submit" class="btn btn-outline-success">Update</button>
                  <button type="reset" class="btn btn-outline-danger">Cancel</button>
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
