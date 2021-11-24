<?php

require 'connection.php';

$query="delete from student_form_record";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../student_list.php?msg=success');
    exit();
}
else{
    header('location:../student_list.php?msg=error');
}


?>