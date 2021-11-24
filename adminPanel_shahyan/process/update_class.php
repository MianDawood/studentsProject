<?php  

// echo "<pre>";

// print_r($_POST);

// echo "</pre>";

// echo $_POST['fname'];

// echo "<br>";
                     //  ("serverName","userName","password","databaseName")
require 'connection.php';

 if(isset($_POST['hide']) && $_POST['hide']=='student'){

$class_name = $_POST['className'];

$section = $_POST['section'];

$description = $_POST['description'];

$update = $_POST['update'];


$query = "update add_classess SET 
Class_Name='$class_name',
Section='$section',
Class_Description='$description'
where Class_ID='$update'";

$go = mysqli_query($connect,$query);

if($go){
    header('location:../class_list.php?sms=success');
    exit();
}
else{
    header('location:../add_classess.php?sms=error');
    exit();
}

}
else{
    echo 'hello this is me...';
}

?>