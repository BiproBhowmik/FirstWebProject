<?php

include 'connection.php';
if($con){
	$update = "update std_info set name = 'haha' where id = 2;";
	$result = mysqli_query($con, $update);
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