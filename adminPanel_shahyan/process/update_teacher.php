<?php  

// echo "<pre>";

// print_r($_POST);

// echo "</pre>";

// echo $_POST['fname'];

// echo "<br>";
                     //  ("serverName","userName","password","databaseName")
require 'connection.php';

 if(isset($_POST['hide']) && $_POST['hide']=='student'){

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$email = $_POST['email'];

$phone_no= $_POST['Phone_no'];

$gender = $_POST['Gender'];

$update = $_POST['update'];

$query = "update teacher SET 
fname='$fname',
lname='$lname',
email='$email',
phone_no='$phone_no',
Gender='$gender'
where Teacher_ID='$update'";

$go = mysqli_query($connect,$query);

if($go){
    header('location:../teacher_list.php?sms=success');
    exit();
}
else{
    header('location:../add_teacher.php?sms=error');
    exit();
}

}
else{
    echo 'hello this is me...';
}

?>