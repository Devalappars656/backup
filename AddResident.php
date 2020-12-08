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
			top: 35%;
			left:26%;
			padding: 30px;
			padding-bottom: 240px;
			color: #fff;
		}
		.Table2{
			position: absolute;
			top: 55%;
			left:28%;
			color: #fff;
		}
		.Table3{
			position: absolute;
			top: 63%;
			left:28%;
			color: #fff;
		}
	
</style>
<body>
	<form action="AddResident.php" method="POST">
	<img src="Darkblue.png" style="width: 100%; height: 170px;margin-top: -2%;opacity: 0;">
			
				<h1 style="font-size: 40px;margin-left: 28%">ADD RESIDENT INFORMATION</h1>		
				<img src="Darkblue.png " style="margin-left: 26%;width: 50%;opacity: .8">
			<table class="Table1">
	<tr>
		<td>
			<label>LAST NAME</label>
		</td>
		<td>
			<input type="text" name="LastName" required>
		</td>
		<td>
			<label>CIVIL STATUS</label>
		</td>
		<td>
			<select name="CivilStatus" required>
				<option value="Single">SINGLE</option>
				<option value="Married">MARRIED</option>
				<option value="SOthers">OTHERS</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>
			<label>FIRST NAME</label>
		</td>
		<td>
			<input type="text" name="FirstName" required> 
		</td>
		<td>
			<label>PLACE OF BIRTH</label>
		</td>
		<td>
			<input type="text" name="BirthPlace" required>
		</td>

	</tr>
	<tr>
		<td>
			<label>MIDDLE NAME</label>
		</td>
		<td>
			<input type="text" name="MiddleName" required>
		</td>
		<td>
			<label>DATE REGISTERED</label>
		</td>
		<td>
			<input type="date" name="DateRegistered" min="1000-01-01" max="50000-12-31" required>
		</td>

	</tr>
	<tr>
		<td>
			BIRTH DATE
		</td>
		<td>
			<input type="date" name="BirthDate" min="1950-01-01" max="2050-12-31" required>
		</td>
		<td>
			<label>ZONE</label>
		</td>
		<td>
			<input type="number" name="Zone" required>
		</td>

	</tr>
</table>
<table class="Table2">
	<tr>
		<td>
			<label>GENDER</label>
		</td>
		
	</tr>

	<tr>
		<td>
			<input type="radio" name="Gender" value="Male" required>MALE
		</td>
		<td>
			<input type="radio" name="Gender" value="Female">FEMALE
		<td>
			<input type="radio" name="Gender" value="Others">OTHERS
		</td>
	</tr>
</table>
<table class="Table3">
	<tr>
		<td colspan="5">
			ACOUNT DETAILS
		</td>
	</tr>
	<tr>
		<td>
			<label>PHONE NUMBER</label>
		</td>
		<td>
			<input type="number" name="PhoneNumber" required>
		</td>
		<td>
			<label>EMAIL ADDRESS</label>
		</td>
		<td>
			<input type="email" name="EmailAddress" required>
		</td>
	</tr>

</table>
<input type="submit" name="AddResident" style="width: 150px;height: 40px; font-size: 20px;position: absolute;top: 75%;left: 43%;color: #0c3c60">
<a href="ResidentInfo.php" style="position: absolute;text-decoration-line: none;font-size: 20px;color: #fff;top: 27%;left: 80%;background-color: #0c3c60;padding: 13px;">Check Resident Information</a>
	<img src="Darkblue.png" style="width: 100%; height: 145px;position: absolute;top: 0px;position: fixed;left: 0px;">
			<nav>
				<a href="Home.php">Home</a>
				<a href="Dashboard.php">Dashboard</a>
				<a href="ResidentInfo.php">Resident Info</a>
				<a href="Certificate.php">Certificate</a>
				<a href="Blotter.php">Blotter</a>
			</nav>
			<img src="Logo.png" style="width:8%;position: absolute;top: 2%;position: fixed;left: 3%;">
</form>
<?php  
if (isset($_POST['AddResident'])) {
	$LastName = $_POST['LastName'];
	$FirstName = $_POST['FirstName'];
	$MiddleName = $_POST['MiddleName'];
	$Gender = $_POST['Gender'];
	$BirthDate = $_POST['BirthDate'];
	$BirthPlace = $_POST['BirthPlace'];
	$CivilStatus = $_POST['CivilStatus'];
	$Zone = $_POST['Zone'];
	$DateRegistered = $_POST['DateRegistered'];
	$PhoneNumber = $_POST['PhoneNumber'];
	$EmailAddress = $_POST['EmailAddress'];


		$conn = new mysqli ('localhost','root','','BarangaySystem');

		if (mysqli_connect_error()) {

    		die("Database connection failed: " . mysqli_connect_error());
			}

		else{
			$sql = "INSERT INTO ResidentInfo(LastName,FirstName,MiddleName,Gender,BirthDate,BirthPlace,CivilStatus,Zone,DateRegistered,PhoneNumber,EmailAddress) values('$LastName','$FirstName','$MiddleName','$Gender','$BirthDate','$BirthPlace','$CivilStatus','$Zone','$DateRegistered','$PhoneNumber','$EmailAddress')";

			if($conn->query($sql)) {
				echo "New Record Inserted";
			}
			else{
				echo "Error : ".sql ."<br>". $conn->error;
			}
			$conn->close();
		}
}
?>
</body>
</html>