
<?php
   
   require 'process/connection.php';

   require 'process/security.php';

   if (isset($_GET['id']) && $_GET['id'] != "") {
     $id = $_GET['id'];
     $block = $_GET['status'];

     if ($block == 0) {
       $query = "update student_form_record set status = 1 where Students_ID = '$id'";
       $go=mysqli_query($connect,$query);
     }
     else{
      $query = "update student_form_record set status = 0 where Students_ID = '$id'";
      $go=mysqli_query($connect,$query);
     }
   }

   if (isset($_GET['table_search'])) {
     $search = $_GET['table_search'];
     $query = "select * from student_form_record where fname like '%$search%' order by Students_ID desc";
     $go=mysqli_query($connect,$query);
   }
   // else if (isset($_GET['id'])){
   //    $query = "select * from student_form_record order by Students_ID desc";  
   //     $go=mysqli_query($connect,$query);
   //     }
    
   else{

    $query="select * from student_form_record INNER JOIN add_classess on student_form_record.Class_ID = add_classess.Class_ID 
    INNER JOIN add_cities on student_form_record.City_ID = add_cities.City_ID 
    order by student_form_record.Students_ID DESC";
    $go=mysqli_query($connect,$query);
  }


?>

<!DOCTYPE html>
<html lang="en">

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
            <h1>Students List</h1>
            <br>
               <form class="form-group" action="" method="get">
                 <div class="row">
      <div class="col-4">
         <div class="card-tools">
                  <div class="input-group" style="width: 170px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
      </div>

      <div class="col-4">
         
      </div>

      <!-- <div class="col-4">
         <div class="card-tools">
                  <div class="input-group" style="width: 170px;">
                    <select name="table_search">
                      <option>Select One</option>
                      <option>Class</option>
                      <option>City</option>
                    </select>

                    <div class="input-group-append">
                      <button type="" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
      </div> -->
    </div>

          </div>
               </form>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
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
              <div class="card-header bg-info">
                <?php
                if(isset($_GET['msg']) && $_GET['msg']=='success'){
                  echo "<h6 class='alert alert-success alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>Record is deleted successfully!</h6>";
                }
                elseif(isset($_GET['msg']) && $_GET['msg']=='error'){
                  echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>Record is not deleted Sorry!</h6>";
                }
                 elseif(isset($_GET['sms']) && $_GET['sms']=='success'){
                  echo "<h6 class='alert alert-success alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>Congratulation! your form Updated successfully</h6>";
                }
                elseif(isset($_GET['sms']) && $_GET['sms']=='error'){
                  echo "<h6 class='alert alert-danger alert-dismissible fade show'>
                  <button type='button' class='close' data-dismiss='alert'>&times;</button>Sorry! your form is not Updated successfully try again...</h6>";
                }
                else{
                  echo "<h5>Student Record</h5>";
                }
                ?>



                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 170px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search" value="Delete All Records">

                    <div class="input-group-append">
                      <a href = "process/DeleteAll.php"
                       onclick="return confirm('are you sure want to delete this record from your list?')">
                      <button type="delete" class="btn-danger">
                        <i class="fas fa-trash"></i>
                      </button>
              </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 ">
                <table class="table table-hover text-nowrap ">
                  <thead class="bg-secondary">
                    <tr>
                      <th>Student_ID</th>
                      <th>First_Name</th>
                      <th>Last_Name</th>
                      <th>Class</th>
                      <th>City</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Password</th>
                      <th>Gender</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody class="">
                    <?php $a=1; while($rec=mysqli_fetch_array($go)) {?>
                      <tr>
                        <td><?php echo $a; ?>&nbsp;<input type="checkbox">
                        </td>
                        <td><?php echo $rec['fname']; ?></td>
                        <td><?php echo $rec['lname']; ?></td>
                        <td><?php echo $rec['Class_Name']; ?></td>
                        <td><?php echo $rec['City']; ?></td>
                        <td><?php echo $rec['email']; ?></td>
                        <td><?php echo $rec['Phone_no']; ?></td>
                        <td><?php echo $rec['password']; ?></td>
                        <td><?php echo $rec['Gender']; ?></td>
                        <td>
                           <?php if($rec['status'] == 0) { ?>
                            <a href="student_list.php?id=<?php echo $rec['Students_ID']; ?>&&status=<?php echo $rec['status']; ?>">
                            <button class=" btn-danger"><i class="fas fa-times"></i></button></a> 
                         
                           <?php } else { ?>
                            <a href="student_list.php?id=<?php echo $rec['Students_ID']; ?>&&status=<?php echo $rec['status']; ?>">
                            <button class=" btn-success"><i class="fas fa-check"></i></button></a> 
                         
                          <a href="edit.php?id=<?php echo $rec['Students_ID']; ?>"
                            onclick="return confirm('are you sure want to edit this record from your list?')" >
                            <button class=" btn-info"><i class="fas fa-edit"></i></button></a> 
                          <a href="process/delete.php?id=<?php echo $rec['Students_ID'];?>"
                           onclick="return confirm('are you sure want to delete this record from your list?')" >
                           <button class="btn-danger"><i class="fas fa-trash"></i></button></a>
                        </td> 
                      </tr>
                      <?php $a++;} }?>
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
    
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php require 'include/footer.php' ?>
</body>
</html>
