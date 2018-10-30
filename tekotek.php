<!DOCTYPE html>
<html>
<head>
	<title>Tugas Ayam</title>
	<style type="text/css">
		.ganjil{
			font: helvetica;
			color: orange;
		}
		.genap{
			font: helvetica;
			color: brown;
		}
	</style>
</head>
<body>
		<?PHP
		echo " Tekotek kotek kotek anak ayam turun 100 <br>";
		$a = 99;
		while ($a >=1){
			if($a%2 == 0){
				echo "<p class='ganjil'>Mati satu tinggal $a</p>";
			}else{
				echo "<p class='genap'>Mati satu tinggal $a</p>";
			}
			echo "<br>";
			$a--;
		}
		?>
</body>
</html>