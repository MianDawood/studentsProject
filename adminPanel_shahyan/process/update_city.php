
<?php  

// echo "<pre>";

// print_r($_POST);

// echo "</pre>";

// echo $_POST['fname'];

// echo "<br>";
                     //  ("serverName","userName","password","databaseName")
require 'connection.php';

 if(isset($_POST['hide']) && $_POST['hide']=='student'){

$village = $_POST['village'];

$city = $_POST['city'];

$province = $_POST['province'];

$update = $_POST['update'];


$query = "update add_cities SET 
Village='$village',
City='$city',
Province='$province'
where City_ID='$update'";

$go = mysqli_query($connect,$query);

if($go){
    header('location:../city_list.php?sms=success');
    exit();
}
else{
    header('location:../add_cities.php?sms=error');
    exit();
}

}
else{
    echo 'hello this is me...';
}

?>