<!DOCTYPE html>
<html lang="en">

<?php require 'process/connection.php';?>

<?php

if(isset($_POST['teacher']) && $_POST['teacher'] == 'subject')
{

   $teacher_id = $_POST['teacher_id'];
   $subject_id = $_POST['subject_id'];


  $query = "insert into teacher_subjects set 
   Teacher_ID = '$teacher_id',
   Subject_ID = '$subject_id'";

   $go = mysqli_query($connect,$query);
   if($go)
   {
    $msg ='Congratulation! your form submit successfully';
   }
}
?>

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
            <h1>Assign Subject</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Assign Subject</li>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="">
                

                <?php
                if(isset($msg) && $msg=='Congratulation! your form submit successfully' ){
                    echo "
                    <h6 class='alert alert-success alert-dismissible fade show'>
            <button type='button' class='close' data-dismiss='alert'>&times;</button>".
            $msg."</h6>";
                }
                elseif(isset($msg) && $msg=='Sorry! your form is not submit successfully try again...' ){
                  echo "
                  <h6 class='alert alert-danger alert-dismissible fade show'>
          <button type='button' class='close' data-dismiss='alert'>&times;</button>".
          $msg."</h6>";
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
           
              <form action="" method="post">
                <div class="card-body">

                <div class="form-group">
                    <label>Teacher</label>
                    <select name="teacher_id" class="form-control">
                                    <option>Select Teacher</option>
                                    <?php $query = "select * from teacher where status = 1";

                                    $go = mysqli_query($connect,$query);

                                    while($rec = mysqli_fetch_array($go)) { ?>
                                    <option value="<?php echo $rec['Teacher_ID'] ?>"><?php echo $rec['fname'].' '.$rec['lname'] ?></option>
                                <?php  } ?>
                                </select>
                              </div>
                              
                  <div class="form-group">
                    <label>Subject</label>
                    <select name="subject_id" class="form-control">
                                    <option>Select Subject</option>
                                    <?php $query = "select * from subject where status = 1";

                                    $go = mysqli_query($connect,$query);

                                    while($rec = mysqli_fetch_array($go)) { ?>
                                    <option value="<?php echo $rec['Subject_ID'] ?>"><?php echo $rec['Subject_Name'] ?></option>
                                <?php  } ?>
                                </select>

                </div>
                 
                  

                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="hidden" name="teacher" value="subject">
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

            
             
            <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="">
                

        

              </div>
              <div class="card-body table-responsive p-0 ">
                <table class="table table-hover text-nowrap ">
                  <thead class="bg-secondary">
                    <tr>
                      <th>Teacher Name</th>
                      <th>Subject </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <?php
                    
                    $query = "select teacher_subjects.*, teacher.fname,teacher.lname,subject.Subject_Name from teacher_subjects 
                    inner join teacher on teacher_subjects.Teacher_ID = teacher.Teacher_ID
                    inner join subject on teacher_subjects.Subject_ID = subject.Subject_ID";
                     $go = mysqli_query($connect,$query);
                 $a=1; while($rec=mysqli_fetch_array($go)) {?>
                      <tr>
                    
                        <td><?php echo $rec['fname'].' '.$rec['lname'] ; ?></td>
                        <td><?php echo $rec['Subject_Name']; ?></td>
                       
                        <td>
                            <?php if($rec['status'] == 0) { ?>
                            <a href="class_list.php?id=<?php echo $rec['ts_id']; ?>&&status=<?php echo $rec['status']; ?>">
                            <button class=" btn-danger"><i class="fas fa-times"></i></button></a> 
                         
                           <?php } else { ?>
                            <a href="class_list.php?id=<?php echo $rec['ts_id']; ?>&&status=<?php echo $rec['status']; ?>">
                            <button class=" btn-success"><i class="fas fa-check"></i></button></a> 
                          
                          <a href="edit_class.php?id=<?php echo $rec['Class_ID']; ?>"
                            onclick="return confirm('are you sure want to edit this record from your list?')" >
                            <button class=" btn-info"><i class="fas fa-edit"></i></button></a> 
                          <a href="process/delete_class.php?id=<?php echo $rec['Class_ID'];?>"
                           onclick="return confirm('are you sure want to delete this record from your list?')" >
                           <button class="btn-danger"><i class="fas fa-trash"></i></button></a>

                           <a href="process/view.php?id=<?php echo $rec['Class_ID'];?>">
                           <button class="btn-light"><i class="fas fa-eye"></i></button></a>


                        </td> 
                      </tr>
                      <?php $a++;} }?>
                  </tbody>
                </table>
              </div>
           
            

            </div>






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
