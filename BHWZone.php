<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
			body {
    background-image:url("background.jpg");
    background-repeat: no-repeat;
    background-size: 100% auto;
     background-attachment: fixed;
	}
	nav{
		position: absolute;
		top: 9%;
		width: 50%;
		left: 25%;
		position: fixed;
	}
	nav a{
		text-decoration-line: none;
		font-size: 20px;
		padding-right: 4%;
		margin-left: 4%;
		color: #fff;


	}
	nav a:hover {
		background-color: blue;
		padding: 1.5%;
		background-color: #fff;
		color:#003370;
	}
		.Table1{
			position: absolute;
			top: 40%;
			border: solid 4px;
			border-color: #0c3c60;
			background-color: #0c3c60;
		}
		.Name{
			width: 100px;
			font-size: 20px;

		}
		.Column{
			width: 180px;
			background-color: #fff;
			text-align: center;
		}
	
</style>
<body>
	<img src="Darkblue.png" style="width: 100%; height: 170px;margin-top: -2%;opacity: 0;">
		
	<table class="Table1">
		
	<tr>
		<td class="Column">
			<label class="Name">Last Name</label>
		</td>
		<td class="Column">
			<label class="Name">First Name</label>
		</td>
		<td class="Column">
			<label class="Name">Middle Name</label>
		</td>
		
		<td class="Column">
			<label class="Name">Gender</label>
		</td>
		<td class="Column">
			<label class="Name">Birth Date</label>
		</td>
		<td class="Column">
			<label class="Name">Birth Place</label>
		</td>
		<td class="Column">
			<label class="Name">Civil Status</label>
		</td>
		<td class="Column">
			<label class="Name">Zone</label>
		</td>
		<td class="Column">
			<label class="Name">Date Registered</label>
		</td>
		<td class="Column">
			<label class="Name">Phone Number</label>
		</td>
		<td class="Column">
			<label class="Name">Email Address</label>
		</td>
	</tr>



	<img src="Darkblue.png" style="width: 100%; height: 145px;position: absolute;top: 0px;position: fixed;left: 0px;">
			<nav>
				<a href="Home.php">Home</a>
				<a href="Dashboard.php">Dashboard</a>
				<a href="ResidentInfo.php">Resident Info</a>
				<a href="Certificate.php">Certificate</a>
				<a href="Blotter.php">Blotter</a>
			</nav>
			<img src="Logo.png" style="width:8%;position: absolute;top: 2%;position: fixed;left: 3%;">
				<?php
				$ZoneNumber = $_POST['ZoneNumber'];
	$conn = mysqli_connect("localhost","root","","BarangaySystem");
	if($conn -> connect_error){
		die("connection failed:". $conn-> connection_error);
	}
		
		$sql = "SELECT LastName,FirstName,MiddleName,Gender,BirthDate,BirthPlace,CivilStatus,Zone,DateRegistered,PhoneNumber,EmailAddress FROM ResidentInfo";
		$result = $conn-> query($sql);
		if ($result-> num_rows > 0 ){


			while ($row = $result-> fetch_assoc()){

				if ($row["Zone"]==$ZoneNumber) {
					echo "<tr><td class='Column'>". $row["LastName"] ."</td><td class='Column'>". $row["FirstName"]. "</td><td class='Column'>". $row["MiddleName"]."</td><td class='Column'>". $row["Gender"]. "</td><td class='Column'>". $row["BirthDate"]. "</td><td class='Column'>". $row["BirthPlace"]. "</td><td class='Column'>". $row["CivilStatus"]. "</td><td class='Column'>". $row["Zone"]. "</td><td class='Column'>". $row["DateRegistered"]. "</td><td class='Column'>". $row["PhoneNumber"]. "</td><td class='Column'>". $row["EmailAddress"]. "</td>
				</tr>";
				}
				
			}
		}
	$conn-> close();
		
	?>
	</table>
<h1 style="font-size: 40px;margin-left: 31%">ZONE <?php echo $ZoneNumber;?> RESIDENT INFORMATION</h1>
</body>
</html>