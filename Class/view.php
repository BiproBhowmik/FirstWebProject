<?php

include 'connection.php';

   if($con){
	    $view = "select * from std_info";
		$result = mysqli_query($con, $view);
?>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Age</th>
				<th>Gender</th>
				<th>Group</th>
				<th>CGPA</th>
			</tr>
<?php
		while($row = mysqli_fetch_assoc($result)){
?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['age'];?></td>
				<td><?php echo $row['gender'];?></td>
				<td><?php echo $row['cgroup'];?></td>
				<td><?php echo $row['cgpa'];?></td>
			</tr>
<?php	
		}
?>
		</table>
<?php
   }
   else{
	   echo "Not Connected";
   }

?>