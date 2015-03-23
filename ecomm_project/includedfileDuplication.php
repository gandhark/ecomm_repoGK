<?php
	$price=0;
	$arra=[];	
	$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SESSION['key'])))))));
	$array1 = $arra[0];
	
	foreach ($array1 as $key =>$value) {
		if($key == 0){
			$array1[$key]= substr($value,18,-18);
		} else {
			$array1[$key] = substr($value,14,-14);
		}
	}
	echo '<tr>';
	?>