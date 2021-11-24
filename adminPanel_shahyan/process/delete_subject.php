<?php

require 'connection.php';

$id = $_GET['id'];
$query="delete from subject where Subject_ID='$id'";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../subject_list.php?msg=success');
    exit();
}
else{
    header('location:../subject_list.php?msg=error');
}

?>