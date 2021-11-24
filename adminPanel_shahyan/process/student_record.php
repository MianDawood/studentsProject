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

$password = $_POST['password'];

$gender = $_POST['Gender'];

$class_id = $_POST['class'];

$city_id = $_POST['city'];



$query = "INSERT INTO student_form_record SET 
fname='$fname',
lname='$lname',
email='$email',
phone_no='$phone_no',
password='$password',
Gender='$gender',
Class_ID='$class_id',
City_ID='$city_id'";



$go = mysqli_query($connect,$query);

if($go){
    header('location:../form.php?msg=Congratulation! your form submit successfully');
    exit();
}
else{
    header('location:../form.php?msg=Sorry! your form is not submit successfully try again...');
    exit();
}

}
else{
    echo 'hello this is me...';
}

?>