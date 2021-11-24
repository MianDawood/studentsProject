<?php

require 'connection.php';

$query="delete from teacher";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../teacher_list.php?msg=success');
    exit();
}
else{
    header('location:../teacher_list.php?msg=error');
}


?>