<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<?php
	$a=$_POST["a"];//menangkap nilai inputan form yg namanya a
	$b=$_POST["b"];//menangkap nilai inputan form yg namanya b
	$c=$_POST["c"];//sama sampai e
	$d=$_POST["d"];
	$e=$_POST["e"];
	$f=$_POST["total"];//menangkap nilai dari checkbox yg namanya total nilai dari total sudah di proses di javascript,checkbox wajib di centang
	$uang=$_POST["f"];//menangkap nilai uang yang di input
	$hasil=$_POST["kembalian"];//menangkap nilai dari checkbox yg namanya kembalian hasil dari kembalian sudah diproses di javascript,checkbox wajib di centang
	//nilai dari total dan kembalian di proses di javascript
	if($hasil<0){
		echo "<script>alert('Uang Anda Kurang')</script><a href='hp.html'>BACK</a>";//jika uangnya kurang akan muncul pop up peringatan 
	}
	else{
		$file=fopen("strukhp.txt","w");//deklarasi $file membuka file strukkom.txt untuk di tulis dan di replace
		fwrite($file,"========================================\n");//menulis string ke file strukkom.txt melalui deklarasi $file
		fwrite($file,"=              Toko Revenge            =\n");
		fwrite($file,"=           Magelang,Borobudur         =\n");
		fwrite($file,"=                 56161                =\n");
		fwrite($file,"========================================\n");
		fwrite($file,"= Nama Barang  : Jumlah =  Total       =\n");
		fwrite($file,"========================================\n");
		if($a!=0){//jika user menginput tidak 0(dia beli barangnya)
			$harga=$a*4000000;//deklarasi $harga isinya nilai dari variable a dikali harga
			fwrite($file,"= Redmi Note 9 : $a Buah = Rp.$harga   =\n");//menulis ke file berupa jumlah dan harga yang harus dibayar
		}//sama sampai if $e
		if($b!=0){
			$harga=$b*2000000;
			fwrite($file,"= Redmi Note 5 : $b Buah = Rp.$harga   =\n");		
		}
		if($c!=0){
			$harga=$c*9000000;
			fwrite($file,"= Redmi Mi 9   : $c Buah = Rp.$harga   =\n");		
		}
		if($d!=0){
			$harga=$d*4500000;
			fwrite($file,"= Pocophone F1 : $d Buah = Rp.$harga   =\n");
		}
		if($e!=0){
			$harga=$e*3500000;
			fwrite($file,"= Realme 3 Pro : $e Buah = Rp.$harga   =\n");			
		}
		//setiap mencari nilai harga selalu di kali harga satuannya,karena di javascript hanya menghitung jumlah harga total bukan satuannya
		fwrite($file,"========================================\n");
		fwrite($file,"= Total                 = Rp.$f  =\n");
		fwrite($file,"= Uang Anda             = Rp.$uang  =\n");
		fwrite($file,"========================================\n");
		fwrite($file,"= Kembalian             = Rp.$hasil   =\n");
		fwrite($file,"=                                      =\n");		
		fwrite($file,"=              Terima Kasih            =\n");
		fwrite($file,"========================================\n");
		fclose($file);//menutup file
	}
	$baca=fopen("strukhp.txt","r");//variable $baca membuka file strukkom.txt hanya untuk dibaca
	while(!feof($baca)){//jika pointer bukan end of file maka akan terus melakukan perulangan
			echo fgets($baca)."<br>";//membaca file per baris 
	}
	fclose($baca);//menutup file
	$link="strukhp.txt";//variable link berupa string strukkom.txt
	echo "<p style='border:2px solid';'>Link Struk Lebih Rapi : <a href='$link'><b>Here</b></a></p>"//membuat link ke file strukkom.txt
	?>
</body>
</html>