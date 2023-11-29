<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Doctor<span>Patient</span></h1>
		<nav>
		<ul> 
			<li><a href="index3.php">Add Doctors</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">Patient Feedback</a></li>

			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>	

		</ul>

	</nav>
</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Patients Information</h1>
	<table class="table4">
		<tr>
		<th>Patient ID</th>
		<th>Patient Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Blood Group</th>

		</tr>

		<?php $sql3="SELECT  * FROM  patients " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["UserID"]."</td><td>".$row3["Name"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3['Email']."</td><td>".$row3['Bloodtype']."</td></tr>";
			}


			echo "</table";

		}

		?>

	
</table>
<br>
<br><br>

<h2 id="delete">Delete Patient</h2>

<form method="post" action="index3.php" class="delete" id="new">


	<div class="input-groupAP">
		<label>Patient ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupAP">
		<button type="submit" name="delete" class="btnAP">Delete</button>
	</div>

</form>

<br><br>
<h2 id="delete">Update Patient</h2>


<form method="post" action="index3.php" class="delete" id="new">

	<div class="input-groupAP">
		<label>Patient Name</label>
		<input type="text" name="names" >
	</div>

	<div class="input-groupAP">
		<label>Address</label>
		<input type="text" name="addresses" >
	</div>

	<div class="input-groupAP">
		<label>Contact Number</label>
		<input type="text" name="contacts" >
	</div>

	<div class="input-groupAP">
		<label>Email</label>
		<input type="text" name="emails" >
	</div>

	<div class="input-groupAP">
		<button type="submit" name="Update" class="btnAP">Update</button>
	</div>

</form>
</body>
</html>