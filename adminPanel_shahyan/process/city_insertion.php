<?php  
 //  ("serverName","userName","password","databaseName")
require 'connection.php';

 if(isset($_POST['hide']) && $_POST['hide']=='student'){

$village = $_POST['village'];

$city = $_POST['city'];

$province = $_POST['province'];

$query = "INSERT INTO add_cities SET 
Village='$village',
City='$city',
Province='$province'";

$go = mysqli_query($connect,$query);

if($go){
    header('location:../add_cities.php?msg=Congratulation! you submit successfully');
    exit();
}
else{
    header('location:../add_cities.php?msg=Sorry! you not submit successfully try again...');
    exit();
}

}
else{
    echo 'hello this is me...';
}

?>