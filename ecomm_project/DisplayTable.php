<?php

class DisplayTable
{
   
	
	public function displayForeach($arranew) {
	
	 $price1=0;
		
	foreach ($arranew as $booking) {
$temp=$booking;
$temp=explode(",", $temp);
	
		
		
		 foreach ($temp as $key=>$booking2) {
		if ($key == 0) {
		
		}
		if ($key == 1 or $key==2 or $key==3) {
			echo "<td>".$booking2."</td>";
		}
		 if ($key == 4) {
			echo "<td>";
			echo '<img src="'.$booking2.'" alt="images" >';
			echo "</td>";
		}
		if ($key==5) {
			echo "<td>".$booking2."</td>";
			echo '<tr>';
			echo '</tr>';
		}
		if ($key==2) {
		
		
				
				$price1=(int)$price1 + (int)$booking2;
				
			}
	}
		}
		
		return $price1;
		
		}

		
		
		
	}


?>