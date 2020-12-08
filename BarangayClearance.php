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
			left:30%;
			padding: 30px;
			padding-bottom: 240px;
			color: #fff;
		}
		.Table2{
			position: absolute;
			top: 55%;
			left:32%;
			color: #fff;
		}
	
</style>
<body>

	<img src="Darkblue.png" style="width: 100%; height: 170px;margin-top: -2%;opacity: 0;">
			
			<h1 style="font-size: 40px;margin-left: 32%">BARANGAY CLEARANCE</h1>
			<img src="Darkblue.png " style="margin-left: 26%;width: 45%;height: 350px; opacity: .8">
	<form action="BarangayClearancePrint.php" method="POST">
	<table class="Table1">
	<tr>
		<td>
			<label>Last Name</label>
		</td>
		<td>
			<input type="text" name="LastName" required>
		</td>
		<td>
			<label>Issued on </label>
		</td>
		<td >
			<select name="Month"  style="width: 100px;border: solid 1px;border-radius: 3px;height: 23px; " required>
<option value="January" >January</option>
<option value="Febuary">Febuary</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
		<td>
	<select name="Day" style="width: 40px;border: solid 1px;border-radius: 3px;height: 23px;" required>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
</select>
		</td>
<td>
	<select name="Year" style="width: 100px;margin-right: 5px;border: solid 1px;border-radius: 3px;height: 23px;" required>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
<option value="2031">2031</option>
<option value="2032">2032</option>
<option value="2033">2033</option>
<option value="2034">2034</option>
<option value="2035">2035</option>
<option value="2036">2036</option>
<option value="2037">2037</option>
<option value="2038">2038</option>
<option value="2039">2039</option>
<option value="2040">2040</option>
<option value="2041">2041</option>
<option value="2042">2042</option>
<option value="2043">2043</option>
<option value="2044">2044</option>
<option value="2045">2045</option>
<option value="2046">2046</option>
<option value="2047">2047</option>
<option value="2048">2048</option>
<option value="2049">2049</option>
<option value="2050">2050</option>



</select>
	</tr>
	<tr>
		<td>
			<label>First Name</label>
		</td>
		<td>
			<input type="text" name="FirstName" required> 
		</td>
		<td>
			<label>Age</label>
		</td>
		<td colspan="3">
			<input type="number" name="Age" required>
		</td>

	</tr>
	<tr>
		<td>
			<label>Middle Initial</label>
		</td>
		<td>
			<input type="text" name="MiddleInitial" required>
		</td>
		<td >
			<label>Zone</label>
		</td>
		<td colspan="3">
			<input type="number" name="Zone" required>
				</td>

	</tr>
	<tr>
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
				<label>Res. Cer.</label>
			</td>
			<td>
				<input type="number" name="ResCer">
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
<input type="submit" name="BarangayClearancePrint" style="width: 150px;height: 40px; font-size: 20px;position: absolute;top:70%;left: 43%;color: #0c3c60">
</form>
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