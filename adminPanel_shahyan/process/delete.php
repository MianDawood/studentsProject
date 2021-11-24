<?php

require 'connection.php';

$id = $_GET['id'];
$query="delete from student_form_record where Students_ID='$id'";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../student_list.php?msg=success');
    exit();
}
else{
    header('location:../student_list.php?msg=error');
}

?>