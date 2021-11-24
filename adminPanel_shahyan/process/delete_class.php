<?php

require 'connection.php';

$id = $_GET['id'];
$query="delete from add_classess where class_ID='$id'";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../class_list.php?msg=success');
    exit();
}
else{
    header('location:../class_list.php?msg=error');
}

?>