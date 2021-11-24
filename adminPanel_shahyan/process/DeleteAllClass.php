<?php

require 'connection.php';

$query="delete from add_classess";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../class_list.php?msg=success');
    exit();
}
else{
    header('location:../class_list.php?msg=error');
}


?>