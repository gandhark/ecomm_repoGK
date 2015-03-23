<pre>
<link rel="stylesheet" type="text/css" href="css/bodyCss.css">
<div id="body">
<h1 style="color:MediumVioletRed;text-align:center"><font face="BedRock">Your Cart</h1>
<table class="table table-striped table-bordered" border="3">



<?php

	include_once("html/displayTable.html");
	include_once "DisplayTable.php";
	
	$var=$_SERVER['QUERY_STRING'];
		
	$_SESSION['key']=$var;

	
	include_once "includedfileDuplication.php";
			
		$objTable=new DisplayTable();
        $price=$objTable->displayForeach($arra[0]);

echo "</tr>";
?>
		<tr>
		<td colspan="4"><h4 style="color:Maroon;text-align:center ">Total Price</h4></td>
		<td><h4 style="color:Maroon;text-align:center"><?php  echo $price;?></h4></td>
		</tr>
</table>
<form action="Summary.php" method="POST">
<input type="submit" class="btn btn-info" value="Confirm Order"/>&nbsp;<input type="button" value="Cancel"
class="btn btn-info" id="cancel_addtoCart"/>
</form>
</div>
</pre>
