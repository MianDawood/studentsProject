<?php

require 'connection.php';

$query="delete from subject";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../subject_list.php?msg=success');
    exit();
}
else{
    header('location:../subject_list.php?msg=error');
}


?>