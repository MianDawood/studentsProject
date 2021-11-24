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

$query = "INSERT INTO subject SET 
Subject_Name='$sname',
Credit_Hours='$crdhour'";


$go = mysqli_query($connect,$query);

if($go){
    header('location:../add_subject.php?msg=Congratulation! your form submit successfully');
    exit();
}
else{
    header('location:../add_subject.php?msg=Sorry! your form is not submit successfully try again...');
    exit();
}

}
else{
    echo 'hello this is me...';
}

?>