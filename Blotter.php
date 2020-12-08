<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<style type="text/css">

	input[type="checkbox"]{
  display: none;
}
.container1{
	  display: none;
      background-color: #0c3c60;
	  width: auto 810px;
	  padding: 30px;
	  height: 400px;
	  position: absolute;
	  top: 150%;
	  left: 50%;
	  transform: translate(-50%, -50%);
	  color: #fff;
}

.container1 .close-btn{
  position: absolute;
  right: 20px;
  top: 15px;
  font-size: 20px;
  cursor: pointer;
  background:#eb8d00;
  width: 8%;
  height: 20px;

}
.container1 .close-btn:hover{
  color: #3498db;
}


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
			
			<h1 style="font-size: 40px;margin-left: 35%">BLOTTER RECORDS</h1>
		<table class="Table1">
		
	<tr>

		<td class="Column">
			<label class="Name">Date</label>
		</td>
		<td class="Column" >
			<label class="Name">Complainant</label>
		</td>
		
		<td class="Column" style="width: 50px;">
			<label class="Name" >Age</label>
		</td>
		
		<td class="Column" style="width: 50px;">
			<label class="Name">Zone</label>
		</td>
		<td class="Column">
			<label class="Name">Respondent</label>
		</td>
		<td class="Column" style="width: 50px;">
			<label class="Name">Age</label>
		</td>
		
		<td class="Column" style="width: 50px;">
			<label class="Name">Zone</label>
		</td>
		<td class="Column">
			<label class="Name">Nature Of Case</label>
		</td>
		<td class="Column">
			<label class="Name">Purpose</label>
		</td>

	</tr>
				<?php
	$conn = mysqli_connect("localhost","root","","BarangaySystem");
	if($conn -> connect_error){
		die("connection failed:". $conn-> connection_error);
	}

		$sql = "SELECT DateReported,ComLastName,ComFirstName,ComAge,ComZone,ResFirstName,ResLastName,ResAge,ResZone,NatureCase,Purpose,Purpose,Purpose_ID FROM Blotter";
		$result = $conn-> query($sql);
		if ($result-> num_rows > 0 ){
			echo "<form method='POST' action='Blotter.php'>
			<input type='text' name='SearchBar' placeholder='Search Info' style='width:10%;height:25px;'>
			<input type='submit' name='SubmitBar' value='Search' style='padding:6px;color:#0c3c60;background:#fff'>";
			if (empty($_POST['SearchBar'])) {
			
			while ($row = $result-> fetch_assoc()){
				echo "<tr>
						<td class='Column'>". $row["DateReported"] ."</td>
						<td class='Column'>". $row["ComFirstName"]." ".$row["ComLastName"]. "</td>
						<td class='Column'>". $row["ComAge"]."</td>
						<td class='Column'>". $row["ComZone"]. "</td>
						<td class='Column'>". $row["ResFirstName"]." ".$row["ResLastName"]. "</td>
						<td class='Column'>". $row["ResAge"]. "</td>
						<td class='Column'>". $row["ResZone"]. "</td>
						<td class='Column'>". $row["NatureCase"]. "</td>
						<td class='Column'><input type='checkbox' id='"."a".$row['Purpose_ID']."'>
						<BUTTON>
								<label for='"."a".$row['Purpose_ID']."'class='show-btn'>Check Purpose</label>
						</BUTTON><div class='container1'>";
						echo "<table>
							<tr>
									<td style='text-align:right;font-size:20px;width:50%'>Complainant Name : </td>
									<td style='text-align:left;font-size:20px;'>".$row['ComFirstName']." ".$row['ComLastName']. "</td>
							</tr>
							<tr>
									<td style='text-align:right;font-size:20px;'>Respondent Name  : </td>
									<td style='text-align:left;font-size:20px;'>".$row['ResFirstName']." ".$row['ResLastName']. "</td>
							</tr>
							<tr>
								<td colspan=2 style='font-size:20px;'><br>PURPOSE</td>
							</tr>
							<tr>
								<td colspan=2 style='font-size:15px;'><br>".$row['Purpose']."</td>
							</tr>


							";

						echo "</table>";

						echo "<label for='"."a".$row['Purpose_ID']."' class='close-btn fas fa-times' title='close'></label>
						</div>
							<style>#"."a".$row['Purpose_ID'].":checked ~ .container1{
								display: block;
								visibility: visible;
							}
							</style>

							</tr>";
						}
					}
	
			elseif ($_POST['SearchBar']!="") {
				$SearchBar = $_POST['SearchBar'];
				$sql = "SELECT DateReported,ComLastName,ComFirstName,ComAge,ComZone,ResFirstName,ResLastName,ResAge,ResZone,NatureCase,Purpose,Purpose,Purpose_ID FROM Blotter WHERE ComLastName like '%$SearchBar%' or ComFirstName like '%$SearchBar%' or ComAge like '%$SearchBar%' or ComZone like '%$SearchBar%' or ResFirstName like '%$SearchBar%' or ResLastName like '%$SearchBar%' or ResAge like '%$SearchBar%' or ResZone like '%$SearchBar%'" ;
				
				$result = $conn-> query($sql);
				while ($row = $result-> fetch_assoc()){
				echo "<tr>
						<td class='Column'>". $row["DateReported"] ."</td>
						<td class='Column'>". $row["ComFirstName"]." ".$row["ComLastName"]. "</td>
						<td class='Column'>". $row["ComAge"]."</td>
						<td class='Column'>". $row["ComZone"]. "</td>
						<td class='Column'>". $row["ResFirstName"]." ".$row["ResLastName"]. "</td>
						<td class='Column'>". $row["ResAge"]. "</td>
						<td class='Column'>". $row["ResZone"]. "</td>
						<td class='Column'>". $row["NatureCase"]. "</td>
						<td class='Column'><input type='checkbox' id='"."a".$row['Purpose_ID']."'>
						<BUTTON>
								<label for='"."a".$row['Purpose_ID']."'class='show-btn'>Check Purpose</label>
						</BUTTON><div class='container1'>";
						echo "<table>
							<tr>
									<td style='text-align:right;font-size:20px;width:50%'>Complainant Name : </td>
									<td style='text-align:left;font-size:20px;'>".$row['ComFirstName']." ".$row['ComLastName']. "</td>
							</tr>
							<tr>
									<td style='text-align:right;font-size:20px;'>Respondent Name  : </td>
									<td style='text-align:left;font-size:20px;'>".$row['ResFirstName']." ".$row['ResLastName']. "</td>
							</tr>
							<tr>
								<td colspan=2 style='font-size:20px;'><br>PURPOSE</td>
							</tr>
							<tr>
								<td colspan=2 style='font-size:15px;'><br>".$row['Purpose']."</td>
							</tr>


							";

						echo "</table>";

						echo "<label for='"."a".$row['Purpose_ID']."' class='close-btn fas fa-times' title='close'></label>
						</div>
							<style>#"."a".$row['Purpose_ID'].":checked ~ .container1{
								display: block;
								visibility: visible;
							}
							</style>

							</tr>";
						}
					}
				}



	$conn-> close();
		
	?>
</form>
</table>

	<a href="AddBlotter.php" style="position: absolute;text-decoration-line: none;font-size: 20px;color: #fff;top: 27%;left: 80%;background-color: #0c3c60;padding: 13px;">Add Blotter Record</a>
		<img src="Darkblue.png" style="width: 100%; height: 145px;position: absolute;top: 0px;position: fixed;left: 0px;">
			<nav>
				<a href="Home.php">Home</a>
				<a href="Dashboard.php">Dashboard</a>
				<a href="ResidentInfo.php">Resident Info</a>
				<a href="Certificate.php">Certificate</a>
				<a href="Blotter.php">Blotter</a>
			</nav>
			<img src="Logo.png" style="width:8%;position: absolute;top: 2%;position: fixed;left: 3%;">
				<img src="Darkblue.png" style="width: 100%; height: 145px;position: absolute;top: 0px;position: fixed;left: 0px;">
			<nav>
				<a href="Home.php">Home</a>
				<a href="Dashboard.php">Dashboard</a>
				<a href="ResidentInfo.php">Resident Info</a>
				<a href="Certificate.php">Certificate</a>
				<a href="Blotter.php">Blotter</a>
			</nav>
			<img src="Logo.png" style="width:8%;position: absolute;top: 2%;position: fixed;left: 3%;">

</body>
</html>