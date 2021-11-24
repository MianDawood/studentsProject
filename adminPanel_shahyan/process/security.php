<?php

	  if (!isset($_SESSION['ID']) || $_SESSION['ID'] == "") {
    header('location:../index.php?msg = ypu can not access this page directly');
    exit();
  }
  
?>