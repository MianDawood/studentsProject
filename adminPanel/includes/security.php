<?php


if(!isset($_SESSION['ID']) || $_SESSION['ID'] == "")
{

header('location:index.php?msg=you cannot acess this page');
exit;

}

?>