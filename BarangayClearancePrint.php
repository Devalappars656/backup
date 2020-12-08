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
		font-size: 23px;
	}
	.Table4{
		font-size: 23px;
		margin-top: 70px;
	}
	.Table5{
		font-size: 25px;
		text-align: center;
		margin-left: 790px;
	}
	.Table6{
		text-align: center;
		margin-top: 50px;
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
		<p style="margin-left: 23.5%;font-size:45px;"> BARANGAY CLEARANCE</p>
	</td>
</tr>
<tr>
	<td>
		<table class="Table3">
			<tr>
				<td>
<pre><div style="text-align: center;">	This is to certify that______________________________________________________

<strong><?php echo $_POST['Age']; ?></strong> years old ,<strong><?php echo $_POST['CivilStatus']."  "; ?></strong>and a resident of <strong>ZONE <?php echo $_POST['Zone']; ?> Dilan-Paurido,Urdaneta City,Pangasinan.</strong></div>
<div>       This is to certify further that he/she has no derogatory record and/or case
   filed against his/her  in this office to date.</div>
<div>        This Barangay Clearance is issued upon his/her  request for whatever  legal
    purpose it may serve.</div>
       Issued this <strong><?php echo $_POST['Day']. "  "; ?></strong>day of <strong><?php echo $_POST['Month']. ", ".$_POST['Year']; ?></strong> at the office of the Punong Barangay.
</pre>
				</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td>
		<table class="Table4">
			<tr>
				<td>
<pre>
_______________________
(Signature of Applicant)
Res. Cer.:<strong><?php echo $_POST['ResCer']; ?></pre></strong>
<p style="margin-top: -22px;"> Issued on:<strong>
	<?php 

		if ($_POST['Month']=='January') {
			echo "1"."-".$_POST['Day']."-".$_POST['Year'];
		}
		if ($_POST['Month']=='Febuary') {
			echo "2"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='March') {
			echo "3"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='April') {
			echo "4"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='May') {
			echo "5"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='June') {
			echo "6"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='July') {
			echo "7"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='August') {
			echo "8"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='September') {
			echo "9"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='October') {
			echo "10"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='November') {
			echo "11"."-".$_POST['Day']."-".$_POST['Year'];
		}
		else if ($_POST['Month']=='December') {
			echo "12"."-".$_POST['Day']."-".$_POST['Year'];
		}

		



		 ?>
			<strong style="position: absolute;top: 51%;left: 24%">
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
			</strong>
		</strong></p>

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
<pre>
******************************************************************************************************************************************************
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
<table class="Logo" style="position: absolute;top: 380px;left: 420px;text-align: center;">
	<tr>
		<td style="width: 300px;" style="text-align: center;">
			<?php echo "<h2> ".$_POST['LastName']; ?>
		</td>
		<td style="width: 300px;">
			<?php echo "<h2>".$_POST['FirstName']; ?>
		</td>
		<td style=" width: 50px;">
			<?php echo "<h2>".$_POST['MiddleInitial']."."; ?>
		</td>

	</tr>
		<tr>
		<td >
			<label>(Last Name)</label>
		</td>
		<td>
			<label>(First Name)</label>
		</td>
		<td>
			<label>(M.I)</label>
		</td>
	</tr>
	
</table>
</body>
</html>