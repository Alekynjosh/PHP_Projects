<head>
	<title>e-donor | Recipient Dashboard</title>
</head>

		<h2 class="text-center">Welcome <?php echo $_SESSION['recipient']; ?></h2>
	<hr>
	<div class="panel panel-default col-xs-7 col-sm-6 col-md-10">
		 <div class="panel-heading text-center"><h4>Possible Donors Within The Same Sub-county(<?php echo $_SESSION['recsubcounty'] ?>)</h4></div>
		 <div class="panel-body">
		<table class="table table-hover table-bordered table-responsive" >
		<tr class="table-active">
			<th>Name</th>
			<th>Phone</th>
		</tr>
		<?php 
		$mysubcounty = $_SESSION['recsubcounty'];
		$mybloodtype = $_SESSION['recbloodType'];
		$sqlmatch = "SELECT name, phone FROM donor WHERE (subcounty = '$mysubcounty' AND bloodtype = '$mybloodtype')";
		$result = $db-> query($sqlmatch);
		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["name"] ."</td><td>". $row["phone"] ."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo ' <tr><td colspan="2" class="text-center">No Data Available at the moment</td></tr></table>';
		}


		 ?>
		</div>
		
	</div>
	
	<hr>

	<div class="panel panel-default col-xs-7 col-sm-6 col-md-10">
		 <div class="panel-heading text-center"><h4>Possible Donors Within The Same County(<?php echo $_SESSION['reccounty']; ?>)</h4></div>
		 <div class="panel-body">
		<table class="table table-hover table-bordered table-responsive" >
		<tr class="table-active">
			<th>Name</th>
			<th>Phone</th>
			<th>Subcounty</th>
		</tr>
		<?php 
		$mycounty = $_SESSION['reccounty'];
		$mybloodtype = $_SESSION['recbloodType'];
		$sqlmatch = "SELECT name, phone, subcounty FROM donor WHERE (county = '$mycounty' AND bloodtype = '$mybloodtype')";
		$result = $db-> query($sqlmatch);
		if ($result-> num_rows > 0) {
			while ($row = $result-> fetch_assoc()) {
				echo "<tr><td>". $row["name"] ."</td><td>". $row["phone"] ."</td><td>". $row["subcounty"] ."</td></tr>";
			}
			echo "</table>";
		}
		else {
			echo ' <tr><td colspan="3" class="text-center">No Data Available at the moment</td></tr>';
		}


		 ?>
		</div>
		
	</div>
</body>
</html>