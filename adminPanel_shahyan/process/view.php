<html>
<body>

<?php

	require 'connection.php';

	require 'security.php';	

	$count;

	 $id = $_GET['id'];
 
	$query="select * from student_form_record where class_ID = '$id'  ";

	$result=mysqli_query($connect,$query);

	while ($row = mysqli_fetch_array($result)) { ?>
	<table style="border-collapse:collapse; font-size:30px; color:yellow; background-color:black; border-radius: 20px; "><br>
	<td align="center">	<?php echo $row['fname']; ?></td>
	
	</table>

		<?php  }  ?>
</body>
</html>