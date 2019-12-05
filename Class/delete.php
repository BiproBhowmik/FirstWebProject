<?php

include 'connection.php';
if($con){
	$delete = "delete from std_info where name = 'haha'";
	$result = mysqli_query($con, $delete);
	if($result){
		echo "Ok";
	}
	else{
		echo "Not Ok";
	}
}
else{
	echo "Not Connected";
}
?>