<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `person`";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Person |  Admin Panel | Infosys Corporation</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>
	<header>
		<nav>
			<h1>AMS</h1>
			<ul id="navli">
				<li><a class="homeblack" href="Mark.php">Attendance</a></li>
				<li><a class="homeblack" href="addperson.php">Add Person</a></li>
				<li><a class="homered" href="viewperson.php">View Person</a></li>
				<li><a class="homeblack" href="index.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	
	<div class="divider"></div>

		<table>
			<tr>

				<th align = "center">ID</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">Contact</th>
				<th align = "center">Address</th>
				<th align = "center">Attendance</th>
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($person = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$person['id']."</td>";
					echo "<td>".$person['firstName']." ".$person['lastName']."</td>";
					echo "<td>".$person['email']."</td>";
					echo "<td>".$person['birthday']."</td>";
					echo "<td>".$person['gender']."</td>";
					echo "<td>".$person['contact']."</td>";
					echo "<td>".$person['address']."</td>";
					echo "<td>".$person['attandance']."</td>";
					

					echo "<td><a href=\"edit.php?id=$person[id]\">Edit</a> | <a href=\"delete.php?id=$person[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
			
</body>
</html>