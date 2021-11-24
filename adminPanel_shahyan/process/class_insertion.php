<?php  
 //  ("serverName","userName","password","databaseName")
require 'connection.php';

 if(isset($_POST['hide']) && $_POST['hide']=='student'){

$class_name = $_POST['className'];

$section = $_POST['section'];

$description = $_POST['description'];

$query = "INSERT INTO add_classess SET 
Class_Name='$class_name',
Section='$section',
Class_Description='$description'";

$go = mysqli_query($connect,$query);

if($go){
    header('location:../add_classess.php?msg=Congratulation! you submit successfully');
    exit();
}
else{
    header('location:../add_classess.php?msg=Sorry! you not submit successfully try again...');
    exit();
}

}
else{
    echo 'hello this is me...';
}

?>