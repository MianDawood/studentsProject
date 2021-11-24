<?php
include('includes/conn.php');
include('includes/security.php');

if(isset($_GET['id']) && $_GET['id'] != "")
{
 $id = $_GET['id'];
 $status = $_GET['status'];
 
 if($status == 0)
 {
   $query = "update tbl_students set status = 1 where student_id = $id";
   $go = mysqli_query($con,$query);

  }
 else
 {
  $query = "update tbl_students set status = 0 where student_id = $id";
  $go = mysqli_query($con,$query);

 }


}
 if(isset($_GET['table_search']))
 {
   $search = $_GET['table_search'];
 $query = "select * from tbl_students where student_name like'%$search%' or student_phone like '%$search%' order by student_id desc";
 $go = mysqli_query($con,$query);

}
 else
 {
 $query = "select * from tbl_students
inner join classes on tbl_students.class_id = classes.class_id 
inner join cities on tbl_students.city_id = cities.city_id
order by tbl_students.student_id desc";
$go = mysqli_query($con,$query);

 }

?>
<!DOCTYPE html>
<html>
<?php require('includes/head.php'); ?>
<body class="hold-transition sidebar-mini">
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
            <h1>List Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              <?php if(isset($_GET['msg']) && $_GET['msg'] == 'success')
{
 $msg='<h5 class="alert alert-success">Record deleted Successfully</h5>';
 echo $msg;
}
elseif(isset($_GET['msg']) && $_GET['msg'] == 'error')
{
  $msg='<h5 class="alert alert-danger">Sorry Error occurr try again</h5>';
  echo $msg;
}


?>

                <div class="card-tools">
                  <form action="" method="get">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Class</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>CNIC</th>
                      <th>City </th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>photo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php $i=1; while($record = mysqli_fetch_array($go)) { ?>
                    <tr>
                       
                    <td><?php echo $record['student_id'];?></td>
                     <td><?php echo $record['student_name']; ?></td>
                     <td><?php echo $record['class_name']; ?></td>

                     <td><?php echo $record['student_email']; ?></td>
                      <td><?php echo $record['student_phone']; ?></td>
                      <td><?php echo $record['student_cnic']; ?></td>
                      <td><?php echo $record['city_name']; ?></td>
                      <td><?php echo $record['student_gender']; ?></td>
                      <td><?php echo $record['student_age']; ?></td>
                      <td> <img src="uploads/<?php echo $record['student_photo']; ?>" weight="40px" height="80px"></td>   
                      <td>
                        <?php if($record['status'] == 0) { ?>
                      <a href="list_students.php?id=<?php echo $record['student_id'];?>&&status=<?php echo $record['status'];?>"> <button class="btn-danger"><i class="fas fa-times"></i></button> </a>
                          <?php } else { ?>

                            <a href="list_students.php?id=<?php echo $record['student_id'];?>&&status=<?php echo $record['status'];?>"> <button class="btn-success"><i class="fas fa-check"></i></button> </a>
                            <a href="edit_student.php?id=<?php echo $record['student_id'];?>"> <button class="btn-info"><i class="fas fa-edit"></i></button> </a>
                             <a href="process/delete.php?id=<?php  echo $record['student_id'];  ?>" onclick="return confirm('are you sure to delete this record')"> <button class="btn-danger"><i class="fas fa-trash"></i></button></a>
                            <?php } ?>
                      
                    </td>                     
                     </tr>
                 <?php $i++; } ?>
            
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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


</body>
</html>
