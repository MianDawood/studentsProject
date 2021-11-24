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
            <h1>Student Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Form</li>
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
                echo "<h6 class='alert alert-secondary'>Registration</h6>";
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
           
              <form action="process/student_record.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last Name"  class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Email</label>
                      <input type="email" name="email" placeholder="Enter Email"  class="form-control">
                      <div class="form-group">
          </div>
                     <label>Phone no</label>
                      <input type="number" name="Phone_no" placeholder="Enter phone number"  class="form-control">
          </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Enter Password"  pattern=".{8,}" class="form-control">
                      </div>

                      <div class="form-group">
                        <label>Select Gender</label><br>
                            <input type="radio" name="Gender" value="Male">&nbsp;Male
                           <input type="radio" name="Gender"  value="Female">&nbsp;Female
                            <input type="radio" name="Gender"  value="Other">&nbsp;Other
                      </div>

                      <div class="form-group">
                             <label>Select Classe</label>
                             <select name="class" class="form-control">
                                    <option>Select Class</option>
                                    <?php $query = "select * from add_classess";

                                    $go = mysqli_query($connect,$query);

                                    while($rec = mysqli_fetch_array($go)) { ?>
                                    <option value="<?php echo $rec['Class_ID'] ?>"><?php echo $rec['Class_Name'] ?></option>
                                <?php  } ?>
                                </select>
                      </div>

                      <div class="form-group">
                             <label>Select City</label>
                            <select name="city" class="form-control">
                                    <option>Select City</option>
                                    <?php
                                     $query = "select * from add_cities";

                                    $go = mysqli_query($connect,$query);

                                    while($rec = mysqli_fetch_array($go)) { ?>
                                    <option value="<?php echo $rec['City_ID'] ?>"><?php echo $rec['City'] ?></option>
                                <?php  } ?>
                                </select>
                      </div>

                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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
