<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pratikum7</title>
	<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
	<header>
		<div class="header-logo"><a href="#nilaimhs">Pratikum 7</a></div>
		<div class="header-list">
			<ul>
				<li><a href="aboutme.html">About Me</a></li>
			</ul>
		</div>
	</header>
	<div class="main-index">
		<div class="container-index" id="nilaimhs">
			<h1 style="text-align: center;">Nilai Akhir Mahasiswa<span>.</span></h1>
		</div>
		<form action=""  method="POST">
		    <table  width="500"	align="center" cellpadding="0" cellspacing="0">
		        <tr>
		            <td><table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
		        <tr>
		            <td>Nama</td>
		            <td>:</td>
		            <td><input name="nama" type="text" size="30" placeholder="Ketik Nama Anda"></td>
		        </tr>
		        <tr>
		            <td>NIM</td>
		            <td>:</td>
		            <td><input  name="nim" type="text" size="30" placeholder="Ketik NIM Anda"></td>
		        </tr>
		        <tr>
		            <td>Nilai Tugas Anda</td>
		            <td>:</td>
		            <td><input  name="tugas" type="number" size="10" min="0" max="100"required></td>
		        </tr>
		        <tr>
		            <td>Nilai UTS Anda</td>
		            <td>:</td>
		            <td><input  name="uts" type="number" size="10" required></td>
		        </tr>
		       	<tr>
		            <td>Nilai UAS Anda</td>
		            <td>:</td>
		            <td><input  name="uas" type="number" size="10" required></td>
		        </tr>
		        <tr>
		            <td></td>
		            <td></td>
		            <td><input type="submit" name="submit" value="Submit"> </td>
		        </tr>
		    </table>
		</form>
    </div>

<?php 
	if(isset($_POST['submit'])){
		$a = $_POST['tugas'];
		$b = $_POST['uts'];
		$c = $_POST['uas'];

		$a = $a * 40/100;
		$b = $b * 30/100;
		$c = $c * 30/100;

		$hasil = $a + $b + $c;
		echo "</br>
		<div class='output'>
			<h1>HASIL :</h1>
			<p>Nilai Akhir Anda = $hasil.</p>
			<p>Anda dinyatakan ";
		
		if($hasil>=60 && $hasil<70){
			$output = "Lulus Dengan Predikat C";
		}if($hasil>=70 && $hasil<80){
			$output = "Lulus Dengan Predikat B";
		}if($hasil>=80){
			$output = "Lulus Dengan Predikat A";
		}else{
			$output = "Tidak Lulus";
		}

		echo "$output.</p>
		</div>";
	}
?>

</body>
</html>