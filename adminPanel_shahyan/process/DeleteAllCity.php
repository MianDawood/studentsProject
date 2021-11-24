<?php

require 'connection.php';

$query="delete from add_cities";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../city_list.php?msg=success');
    exit();
}
else{
    header('location:../city_list.php?msg=error');
}


?>