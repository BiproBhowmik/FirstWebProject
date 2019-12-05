
 */ $color =array("Tahjiba","Bipro","Heva","Rizwan");
	$nums=array(10,20,2,3,56,05);
	
	echo $color[2]."<br/>";
	echo $nums[4]."<br/>";
	print_r($nums)."<br/>";
	echo "<pre>";
	print_r($color);
	echo "</pre>";
	
	foreach($nums as $num){
		echo $num."<br/>";
	} */
	<ul>
	
		<?php
		$hebas =["Red","Green","Tiktok","musically"];
		foreach($hebas as $heba){
			echo "<li>".$heba."</li>";
		}
		function first_function(){
			echo "<br/>"."This is function<br/>";
		}
		first_function();
		echo "Hello"."<br/>";
		
		function sum($a,$b,$c){
			
			echo $a+$b-$c;
		}
		sum(98,2,20);
		
		?>
		
	
	</ul>
	