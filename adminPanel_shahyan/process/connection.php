<?php

$connect = mysqli_connect("localhost","root","","classproject");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_error();
        exit();
    }

    session_start();

?>