<?php  

// echo "<pre>";

// print_r($_POST);

// echo "</pre>";

// echo $_POST['fname'];

// echo "<br>";
                     //  ("serverName","userName","password","databaseName")
require 'connection.php';

 if(isset($_POST['hide']) && $_POST['hide']=='student'){

$sname = $_POST['sname'];

$crdhour = $_POST['crdhour'];

$update = $_POST['update'];

$query = "update subject SET 
Subject_Name='$sname',
Credit_Hours='$crdhour'
where Subject_ID='$update'";

$go = mysqli_query($connect,$query);

if($go){
    header('location:../subject_list.php?sms=success');
    exit();
}
else{
    header('location:../add_subject.php?sms=error');
    exit();
}

}
else{
    echo 'hello this is me...';
}

?>