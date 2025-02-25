<?php 
require_once ('process/dbh.php');
$sql = "SELECT id, firstName, lastName,attandance FROM person";
$result = mysqli_query($conn, $sql);
?>


<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="styleemplogin.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="styleindex.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>
	
	<header>
		<nav>
			<h1>AMS</h1>
			<ul id="navli">
				<li><a class="homered" href="Mark.php">Attendance</a></li>
				<li><a class="homeblack" href="addperson.php">Add Person</a></li>
				<li><a class="homeblack" href="viewperson.php">View Person</a></li>
				<li><a class="homeblack" href="index.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div> <br><br>
	
		<h2 style="font-family: 'Montserrat', sans-serif; font-size: 25px; margin-left:5%;">Mark Attendance </h2>
    	<!-- <form action="process/markattandanceprocess.php" method="POST" enctype="multipart/form-data"> -->
		<input type="hidden" name="count" id="count" value="<?php echo mysqli_num_rows($result)?>">
		<table>

			<tr bgcolor="#000">
				<th align = "center">Number</th>
				<th align = "center">ID</th>
				<th align = "center">Name</th>
				<th align = "center">Attendance</th>
			</tr>

			

			<?php
				$seq = 1;
				while ($person = mysqli_fetch_assoc($result)) {
					echo "<tr name='rec_".$seq."'>";
					echo "<td>".$seq."</td>";
					echo "<td id='pid_".$seq."'>".$person['id']."</td>";
					echo "<td>".$person['firstName']." ".$person['lastName']."</td>";
					echo "<td><input type='radio' id='present' name='attandance_".$seq."' value='present'>Present
					<input type='radio' id='absent' name='attandance_".$seq."' value='absent'>Absent
					</td>";
				
					
					$seq+=1;
				}


			?>

		</table>
		<div style="float:right;margin-right:6%;">
			<button class="btn btn--radius btn--green" type="submit" onClick="markAtt()">Save</button>
		</div>
	<!-- </form> -->
	</div>
</body>
<script>
function markAtt() {
	
	console.log(document.getElementById("count").value);
	var n = document.getElementById("count").value;
	var presentIds = '';
	for(let i=1;i<=n;i++) {
		if(document.getElementsByName("attandance_"+i)[0].checked) {
			presentIds += ',' +document.getElementById("pid_"+i).textContent;
		}
	}
	presentIds = presentIds.slice(1,presentIds.length);
	console.log(presentIds);
	$.post('process/markattandanceprocess.php', {presentIds: presentIds,count:presentIds.length})
    window.alert('Succesfully Updated')
    window.location.href='viewperson.php';
}
</script>
</html>