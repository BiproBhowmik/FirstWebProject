<?php

include 'connection.php';
if($con){
	$insert = "insert into std_info values(10, 'Hello', 25, 'Male', 'Science', 3.33);";
	$result = mysqli_query($con, $insert);
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