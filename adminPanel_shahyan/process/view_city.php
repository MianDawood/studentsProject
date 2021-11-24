<html>
<body>

<?php

	require 'connection.php';

	require 'security.php';	


	$count;
 $id = $_GET['id'];
 
	$query="select * from student_form_record where City_ID = '$id'  ";
	$result=mysqli_query($connect,$query);

	while ($row = mysqli_fetch_array($result)) { ?>
	<table>
	<td align="center">	<?php echo $row['fname']; ?></td>
	<td align="center">	<?php echo $row['lname']; ?></td>
	</table>

		<?php  }  ?>
</body>
</html>