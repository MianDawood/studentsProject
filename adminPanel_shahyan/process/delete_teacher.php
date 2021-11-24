<?php

require 'connection.php';

$id = $_GET['id'];
$query="delete from teacher where Teacher_ID='$id'";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../teacher_list.php?msg=success');
    exit();
}
else{
    header('location:../teacher_list.php?msg=error');
}

?>