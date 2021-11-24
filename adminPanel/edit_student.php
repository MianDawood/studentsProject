<?php include('includes/conn.php');
include('includes/security.php');
$id = $_GET['id'];
 $query = "select * from tbl_students where student_id = $id";
$go = mysqli_query($con,$query);
$record = mysqli_fetch_array($go);

?>

<!DOCTYPE html>
<html>
<?php require('includes/head.php'); ?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php require('includes/navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require('includes/sidebar.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
  <?php if(isset($_GET['msg']) && $_GET['msg'] == 'success')
{
 $msg='<h5 class="alert alert-success">Record Added Successfully</h5>';
 echo $msg;
}
elseif(isset($_GET['msg']) && $_GET['msg'] == 'error')
{
  $msg='<h5 class="alert alert-danger">Sorry Error occurr try again</h5>';
  echo $msg;
}


?>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Student</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="row">
    <div class="col-md-12">
    
      <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Edit Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="process/student_update_process.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <label> First Name</label>
                               <input type="text" name="name" class="form-control" placeholder="Please Enter your name" value="<?php echo $record['student_name']; ?>">
                  </div>

                  <div class="form-group">
                               <label>CNIC</label>
                               <input type="text" name="cnic" class="form-control" placeholder="Enter CNIC without dashes" value="<?php echo $record['student_cnic']; ?>">
                           </div>

                           <div class="form-group">
                               <label>Phone</label>
                               <input type="text" name="phone" class="form-control" placeholder="Please Enter your Phone" value="03331234567" value="<?php echo $record['student_phone']; ?>">
                           </div>

                           <div class="form-group">
                               <label>Email</label>
                               <input type="text" name="email" class="form-control" placeholder="Enter CNIC without dashes" value="<?php echo $record['student_email']; ?>">
                           </div>

                          


                           <div class="form-group">
                               <label>Age</label>
                               <input type="text" name="age" class="form-control" placeholder="Please Enter your Domicle" value="<?php echo $record['student_age']; ?>">
                           </div>
                          

                           <div class="form-group">
                               <label>City</label>
                               <select name="city" class="form-control">
                            <option value="Nill">Please select Cities</option>
                            <?php $query = "select * from cities";
                            
                                  $go = mysqli_query($con,$query);
                                while($rec = mysqli_fetch_array($go))
                                {

                                  if($rec['city_id'] == $record['city_id'])
                                  {
                                    $select ="selected=selected";
                                  }
                                  else
                                  {
                                    $select = "";
                                  }
                            ?>
                            <option <?php echo $select; ?> value="<?php echo $rec['city_id']; ?>"><?php echo $rec['city_name'] ?></option>
                           <?php } ?>
                            
                           </select>
                           </div>


                           <div class="form-group">
                               <label>Class</label>
                           <select name="class" class="form-control">
                            <option value="Nill">Please select Class</option>
                            <?php $query = "select * from classes";
                            
                                  $go = mysqli_query($con,$query);
                                while($rec = mysqli_fetch_array($go))
                                {

                                  if($rec['class_id'] == $record['class_id'])
                                  {
                                    $select ="selected=selected";
                                  }
                                  else
                                  {
                                    $select = "";
                                  }
                            ?>
                            <option <?php echo $select; ?> value="<?php echo $rec['class_id']; ?>"><?php echo $rec['class_name'] ?></option>
                           <?php } ?>
                            
                           </select>
                           </div>


                           
                           <div class="form-group">
                            <label>Hobbies</label>
                           <br>
                               <input type="checkbox" name="hobbies[]"  value="cricket">Cricket

                               <input type="checkbox" name="hobbies[]"  value="Traveling">Traveling
                               <input type="checkbox" name="hobbies[]"  value="Swimming">Swimming

                               <input type="checkbox" name="hobbies[]"  value="Reading">Reading
                               <input type="checkbox" name="hobbies[]"  value="Games">Games

                               <input type="checkbox" name="hobbies[]"  value="Singing">Singing
                           </div>

                           <div class="form-group">
                              <br>
                               <input type="radio" name="gender"  value="male">Male

                               <input type="radio" name="gender"  value="female">Female
                           </div>


                           <div class="form-group">
                               <label>Password</label>
                               <input type="password" name="password" class="form-control"  value="<?php echo $record['student_password']; ?>">
                           </div>


                           <div class="form-group">
                               <label>photo</label>
                               <img src="uploads/<?php echo $record['student_photo']; ?>" weight="40px" height="80px">
                               <input type="file" name="photo" class="form-control">
                               <input type="hidden" name="oldphoto" class="form-control"  value="<?php echo $record['student_photo']; ?>">

                              </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                <input type="hidden" name="update" value="student">
                <input type="hidden" name="id" value="<?php echo $record['student_id']; ?>">
                  <button type="submit" class="btn btn-primary">update</button>
                </div>
              </form>
            </div>
    
    
    </div>
    
    </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require('includes/footer.php'); ?>

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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
