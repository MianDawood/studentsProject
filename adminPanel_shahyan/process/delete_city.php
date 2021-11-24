<?php

require 'connection.php';

$id = $_GET['id'];
$query="delete from add_cities where City_ID='$id'";
$go=mysqli_query($connect,$query);
if($go){
    header('location:../city_list.php?msg=success');
    exit();
}
else{
    header('location:../city_list.php?msg=error');
}

?>