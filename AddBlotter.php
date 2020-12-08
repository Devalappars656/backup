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
				
	
</style>
<body>
	<img src="Darkblue.png" style="width: 100%; height: 170px;margin-top: -2%;opacity: 0">
			
			<h1 style="font-size: 40px;margin-left: 42.3%">BLOTTER</h1>
			<img src="Darkblue.png " style="margin-left: 26%;width: 45%;height: 400px; opacity: .8">
			<form action="AddBlotter.php" method="POST">

<table class="Table1">
	<tr>
		<td>
			<label>
				Complainant
			</label>
		</td>
		<td>
			<input type="text" name="ComFirstName" placeholder="FirstName" required>
		</td>
		<td>
			<input type="text" name="ComLastName" placeholder="LastName" required>
		</td>
		<td>
			<input type="number" name="ComAge" placeholder="Age" style="width: 50px;" required> 
		</td>
		<td>
			<input type="number" name="ComZone" placeholder="Zone" style="width: 50px;" required>
		</td>

	</tr>
		<tr>
		<td>
			<label>
				Respondent
			</label>
		</td>
		<td>
			<input type="text" name="ResFirstName" placeholder="FirstName" required>
		</td>
		<td>
			<input type="text" name="ResLastName" placeholder="LastName" required>
		</td>
		<td>
			<input type="number" name="ResAge" placeholder="Age" style="width: 50px;" required>
		</td>
		<td>
			<input type="number" name="ResZone" placeholder="Zone" style="width: 50px;" required>
		</td>

	</tr>
	<tr>
		<td>
			<label>Date Reported</label>
		</td>
		<td>
			<input type="date" name="DateReported" min="2020-01-01" max="2050-12-31" required>
		</td>
	</tr>
	<tr>
		<td>
			<label>Nature Of Case</label>
		</td>
		<td>
			<input type="text" name="NatureCase" required>
		</td>
	</tr>
</table>





<textarea name="Purpose" placeholder="Purpose" style="position: absolute;top: 55%;left: 33%;width: 30%;height: 15%"></textarea>
<input type="submit" name="AddBlotter" style="width: 150px;height: 40px; font-size: 20px;position: absolute;top: 75%;left: 43%;color: #0c3c60">

<a href="Blotter.php" style="position: absolute;text-decoration-line: none;font-size: 20px;color: #fff;top: 27%;left: 80%;background-color: #0c3c60;padding: 13px;">Check Blotter Records</a>
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
if (isset($_POST['AddBlotter'])) {
	$DateReported = $_POST['DateReported'];
	$ComFirstName = $_POST['ComFirstName'];
	$ComLastName = $_POST['ComLastName'];
	$ComAge = $_POST['ComAge'];
	$ComZone = $_POST['ComZone'];
	$ResFirstName = $_POST['ResFirstName'];
	$ResLastName = $_POST['ResLastName'];
	$ResAge = $_POST['ResAge'];
	$ResZone = $_POST['ResZone'];
	$NatureCase = $_POST['NatureCase'];
	$Purpose = $_POST['Purpose'];
	
	
$dbconnect=mysqli_connect('localhost','root','','BarangaySystem');
$sql=mysqli_query($dbconnect, "insert into Blotter(DateReported,ComFirstName,ComLastName,ComAge,ComZone,ResFirstName,ResLastName,ResAge,ResZone,NatureCase,Purpose) values('$DateReported','$ComFirstName','$ComLastName','$ComAge','$ComZone','$ResFirstName','$ResLastName','$ResAge','$ResZone','$NatureCase','$Purpose')");

}

?>
</form>
</body>
</html>