<html>
		<head>
			<title>UTSCovid19</title>
		</head>
	<body>
		<script language="JavaScript">
    	var tanggallengkap = new String();
    	var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
    	namabulan = namabulan.split(" ");
    	var tgl = new Date();
    	var tanggal = tgl.getDate();
    	var bulan = tgl.getMonth();
    	var tahun = tgl.getFullYear();
    	tanggallengkap = tanggal + " " + namabulan[bulan] + " " + tahun;
 		</script>
 		<marquee onmouseover="this.stop()" onmouseout="this.start() " scrollamount="2" direction="up" width="100%" height="100" align="center"><p align="center">
			<h1 style=" color: #ff8000; font-size: 30px; text-align: center; text-height: font-size; text-shadow: 1px 0px #ccc, 0px 1px #ccc, 2px 1px #ddd, 1px 2px #bbb, 3px 2px #ddd, 2px 3px #bbb, 4px 3px #ddd, 3px 4px #bbb, 5px 4px #ddd, 4px 5px #bbb, 6px 5px #ddd, 5px 6px #bbb, 7px 6px #ddd, 6px 7px #bbb, 8px 7px #ddd, 7px 8px #bbb, 8px 8px #ddd;">CORONAVIRUS (COVID-19)</h1></p></marquee>
	<form action="bukutamu.php" method="post" enctype="multipart/form-data" name="form1">
		<table width="500" border="0" align="center" cellpadding="10" cellspacing="5">
		<tr>
			<td width="9%" >Positif</td>
			<td width="91%"><input name="Positif" type="text" id="Positif" size="20"></td>
		</tr>
		<tr>
			<td>Dirawat</td>
			<td><input type="text" name="Dirawat" size="20"></td>
		</tr>
		<tr>
			<td>Sembuh</td>
			<td><input type="text" name="Sembuh" size="20"></td>
		</tr>
		<tr>
			<td>Meninggal</td>
			<td><input type="text" name="Meninggal" size="20"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input type="submit" value="Submit" name="submit">
				<input type="reset" value="reset" name="reset">
			</td>
		</tr>
		</table>
	</form>
	<p align="center"><br>
	<hr color="blue" size=5 width=100% align="left">
	<p align="center">
	<font size="4" color="yellow" face="arial"> Data Pemantauan Covid19 Wilayah Banten</font></p>
	<p align="center"><font size="4" color="blue" face="arial">
	 per <script language='JavaScript'>document.write(tgl);</script></font></p>
	<p align="center"> <font size="4" color="black" face="arial"> Sulthoni : 171011401685 </font></p>
	<?php
		$file = "input.txt";
		$fp = fopen($file,"r");

		while (!feof($fp)){
			$baca = fgets($fp,50);
			print("$baca");
		}
		fclose($fp);
	?>
		</p>
		<p>&nbsp;</p>
	</body>

</html>