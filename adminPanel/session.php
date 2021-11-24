<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["Name"] = "UMAR ALI";
$_SESSION["favcolor"] = "Black";
$_SESSION["favanimal"] = "DOg";
echo "Session variables are set.";
?>

</body>
</html>