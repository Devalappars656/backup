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
			left:34%;
			padding: 30px;
			padding-bottom: 240px;
			color: #fff;
			
	
</style>
<body>
	<img src="Darkblue.png" style="width: 100%; height: 170px;margin-top: -2%;opacity: 0;">
			
			<h1 style="font-size: 40px;margin-left: 29%">CERTIFICATE OF RESIDENCY</h1>
			<img src="Darkblue.png " style="margin-left: 31%;width: 33%;height: 270px; opacity: .8">


<form action="CertificateResidencyPrint.php" method="POST">
	<table class="Table1">
		<tr>
			<td>
				<label>Certify Name</label>
			</td>
			<td>
				<input type="text" name="FirstName" placeholder="FirstName" style="width: 90px;" required>
			</td>
			<td>
				<input type="text" name="MiddleInitial" placeholder="M.I" style="width: 40px;" required>
			</td>
			<td>
				<input type="text" name="LastName" placeholder="LastName" style="width: 90px;" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Issued to</label>
			</td>
			<td>
				<input type="text" name="FirstName2" placeholder="FirstName" style="width: 90px;" required>
			</td>
			<td>
				<input type="text" name="MiddleInitial2" placeholder="M.I" style="width: 40px;" required>
			</td>
			<td>
				<input type="text" name="LastName2" placeholder="LastName" style="width: 90px;" required>
			</td>
		</tr>
		<tr>
			<td>
				<label>Issued On</label>
			</td>
			<td>
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
    <option value="1" >1</option>
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
				<label>Death Since</label>
			</td>
			<td>
			<select name="Month2"  style="width: 100px;border: solid 1px;border-radius: 3px;height: 23px; " required>
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
	<select name="Day2" style="width: 40px;border: solid 1px;border-radius: 3px;height: 23px;" required>
    <option value="1" >1</option>
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
	<select name="Year2" style="width: 100px;margin-right: 5px;border: solid 1px;border-radius: 3px;height: 23px;" required>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
<option value="1979">1979</option>
<option value="1978">1978</option>
<option value="1977">1977</option>
<option value="1976">1976</option>
<option value="1975">1975</option>
<option value="1974">1974</option>
<option value="1973">1973</option>
<option value="1972">1972</option>
<option value="1971">1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>

</select>
	</tr>
	<tr>
		<td>
			<label>Zone</label>
		</td>
		<td>
			<input type="number" name="Zone" style="width: 90px;">
		</td>
	</tr>
	</table>
	<input type="submit" name="CertificateResidencyPrint" style="width: 150px;height: 40px; font-size: 20px;position: absolute;top:60%;left: 43%;color: #0c3c60">

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