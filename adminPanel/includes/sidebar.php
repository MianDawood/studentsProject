<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> <?php if(isset($_SESSION['STID'])){echo 'Student Panel';}else{'Admin Panel';} ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php if(isset($_SESSION['STID'])){ ?>
          <img src="uploads/<?php echo  $_SESSION['PHOTO'];?>" class="img-circle elevation-2" alt="User Image">
      
      <?php } ?>  </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['NAME'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="far fa-meter nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
        
              <?php if(isset($_SESSION['STID'])){ ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Course</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="list_students.php" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>My Courses</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Fees
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Fees</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="list_students.php" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Fees List</p>
                </a>
              </li>
            </ul>
          </li>
<?php } else{ ?>


<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Students
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="add_student.php" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="list_students.php" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>List Students</p>
                </a>
              </li>
            </ul>
          </li>
          <?php }?>
          <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="fa fa-times nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
         
         
        
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>