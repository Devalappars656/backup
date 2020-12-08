<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.TableAll{
		padding-right: -250px;
		position: absolute;
		top: 35px;
	}
	.Table1{
		text-align: center;
		font-size: 18px;
		margin-left: 35%;
	}
	.Table2{
		text-align: center;
		font-size: 23px;
		margin-left: 29%;
		margin-top: -4.2%;
	}
	.Table3{
		font-size: 25px;

	}

	.Table5{
		font-size: 25px;
		text-align: center;
		margin-left: 790px;
		margin-top: 60px;
	}
	.Table6{
		text-align: center;
		margin-top: 120px;
	}
	@media print{
		body * {
			visibility: hidden;
		}
		.TableAll, .Logo ,  .TableAll *, .Logo * {
			visibility: visible;
		}
		
	}

	</style>
</head>
<body>
	<button onclick="window.print();" style="position: absolute;height: 50px;width: 100px;font-size: 25px;top: 100px;left: 1200px; " >
	PRINT </button>

<img src="Logo.png" style="width: 800px;margin-left: 130px; margin-top: 230px;opacity: .2;" class="Logo">
<img src="Logo.png" style="position: absolute;width: 170px;top: 40px;left: 120px; " class="Logo">
<img src="Logo2.png" style="position: absolute;width: 170px;top: 55px;left: 730px;" class="Logo">
<img src="color.jpg" style="position: absolute;top: 1220px;left: 0px;width: 1150px;height: 200px;" class="Logo">




<table class="TableAll">
	<tr>
		<td>
			<table class="Table1">
				<tr>
					<td>
<strong><pre>
Republic of the Philippines
Province of Pangasinan
City of Urdaneta
</pre></strong>					
					</td>
				</tr>
			</table>
		</td>
	</tr>
	 
	<tr>
		<td>
			<table class="Table2">
				<tr>
					<td>
<strong><pre>
BARANGAY DILAN-PAURIDO

OFFICE OF THE PUNONG BARANGAY
</pre></strong>
					</td>
				</tr>
			</table>

		</td>
	</tr>
<tr>
	<td>
		<p style="margin-left: 31%;font-size:45px;">CERTIFICATION</p>
	</td>
</tr>
<tr>
	<td>
		<table class="Table3">
			<tr>
				<td>
<pre>
	this is to certify that _____________________________of legal 
age is a bonafide resident of Zone <?php echo $_POST['Zone'];?> Barangay Dilan-Paurido, Urdaneta
City, Pangasinan.
<div>
	This further certifies that ___________________________ he is 
Death since ____________________
</div>
<div>	This certification us being issued to ____________________ for
whatever legal purpose it may serve.
</div>
<div>	Issued this <?php echo $_POST['Day']." "?>  day of  <?php echo $_POST['Month']." <strong>".$_POST['Year']?></strong>  the office of the Punong 
Barangay of Dilan-Paurido, City of Urdaneta, Province of Pangasinan.
	
</div>
<strong style="position: absolute;top: 45.5%;left: 27.1%;" class="Logo">
					<?php 
	if ($_POST['Day']=='1') {
 		echo "<h6>st</h6>";
 	}
 	elseif ($_POST['Day']=='11') {
 		echo "<h6>st</h6>";
 	}
 	elseif ($_POST['Day']=='21') {
 		echo "<h6>st</h6>";
 	}
 	elseif ($_POST['Day']=='31') {
 		echo "<h6>st</h6>";
 	}
 	elseif ($_POST['Day']=='2') {
 		echo "<h6>nd</h6>";
 	}
 	elseif ($_POST['Day']=='12') {
 		echo "<h6>nd</h6>";
 	}
 	elseif ($_POST['Day']=='22') {
 		echo "<h6>nd</h6>";
 	}
 	elseif ($_POST['Day']=='3') {
 		echo "<h6>rd</h6>";
 	}
 	elseif ($_POST['Day']=='13') {
 		echo "<h6>rd</h6>";
 	}
 	elseif ($_POST['Day']=='23') {
 		echo "<h6>rd</h6>";
 	}
 	else{
 		echo "<h6>th</h6>";
 	}
 	


 	 ?>

</pre>
				</td>
			</tr>
		</table>
	</td>
</tr>

<tr>
	<td>
		<table class="Table5">
			<tr>
				<td>
<pre><strong><u>
AGUSTIN T. DELA PEÑA</u></strong>
Punong Barangay
</pre>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td>
		<table class="Table6">
			<tr>
				<td>
<strong>
<pre>******************************************************************************************************************************************************
Barangay Officials

Kgd.Buenaventura S. Erroc, Kgd.Mark Je B. Rosario, Kgd.Redento D. Bergado, Kgd.Romeo D. Domagas, Kgd.Marlon M. Caliboso, Kgd.Josephine L. Badua, Kgd.Michael
A. Baldonado, SK Chairman Alecsandra Beatrice Elyza P. Mateo,Brgy.Sec.Sheinah A. Silva, Brgy.Tres.Imelda S. Lomibao
</pre></strong>				
				</td>
			</tr>
		</table>
	</td>
</tr>

</table>

<p style="position: absolute;top: 395px;left: 440px;font-size: 20px; width: 390px;text-align: center;" class="Logo"><strong><?php echo $_POST['FirstName']." ".$_POST['MiddleInitial'].". ".$_POST['LastName']; ?> </strong></p>


<p style="position: absolute;top: 510px;left: 505px;font-size: 21px;width: 390px;text-align: center;" class="Logo"><strong><?php echo $_POST['FirstName']." ".$_POST['MiddleInitial'].". ".$_POST['LastName']; ?> </strong></p>

<p style="position: absolute;top: 540px;left: 180px;font-size: 21px;width: 270px;text-align: center;" class="Logo"><strong><?php echo $_POST['Month2']." ".$_POST['Day2'].". ".$_POST['Year2']; ?> </strong></p>

<p style="position: absolute;top: 600px;left: 630px;font-size: 21px;width: 290px;text-align: center;" class="Logo"><strong><?php echo $_POST['FirstName2']." ".$_POST['MiddleInitial2'].". ".$_POST['LastName2']; ?> </strong></p>


</body>
</html>