<?php
require('../includes/conn.php');
$id = $_GET['id'];
$query ="delete from tbl_students where student_id='$id'";
$go = mysqli_query($con,$query);
if($go)
{
    header('location:../list_students.php?msg=success');
    exit();
}
else
{
    header('location:../list_students.php?msg=error');
    exit();  
}
?>