<?php 

require('../includes/conn.php');

if(isset($_POST['update']) && $_POST['update'] == 'student'){

$name = $_POST['name'];

$cnic = $_POST['cnic'];

$phone = $_POST['phone'];

$email = $_POST['email'];

// $address = $_POST['address'];

$city = $_POST['city'];
$password = $_POST['password'];
$age = $_POST['age'];

$gender = $_POST['gender'];
$class_id = $_POST['class'];
$id = $_POST['id'];


if($_FILES['photo']['name'] != "") 
{
 
$photoName = $_FILES['photo']['name'];
// $photoSize = $_FILES['photo']['size'];
 $photoType = $_FILES['photo']['type'];
$photoTemp = $_FILES['photo']['tmp_name'];

if($photoType == "image/PNG" || $photoType ==  "image/jpeg" ||  $photoType ==  "image/jpg" )
{
  $uplaod = move_uploaded_file($photoTemp, "../uploads/$photoName");

}
else
{
  header('location:../add_student.php?msg=error');
  exit();
}

}else
{
  $photoName = $_POST['oldphoto'];
}




 $query ="update tbl_students SET student_name = '$name',
student_email = '$email', 
student_phone = '$phone',
student_cnic = '$cnic', 
student_city = '$city',
student_gender = '$gender',
student_photo = '$photoName',
student_password = '$password',
class_id = '$class_id',
city_id = '$city',
student_age= '$age'
where student_id = $id";



$go = mysqli_query($con,$query);

$id = mysqli_insert_id($con);

foreach($_POST['hobbies'] as $key => $value)
{
  $insert_hobbies = mysqli_query($con,"insert into std_hobbies set hobby='$value',std_id='$id'");

}


if($go)
{
  
  header('location:../list_students.php?msg=success');
  exit();
}
else
{
 
  header('location:../list_students.php?msg=error');
  exit();
}

}
else
{
  echo 'YOU ARE NOT ALLOWED TO ACCESS THIS PAGE DIRECTLY';
}
?>