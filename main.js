function cari() {
var kata = document.formcari.keyword.value;//menagkap inputan dari tag input ke variable kata
var hasil= "http://www.google.com/search?q=" + kata ;//deklarasi variable hasil berupa halaman web ditambah kata yg kita input 
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes');//setelah di submit akan membuka jendela baru berupa link web ditambah kata yang di input
}
function masuk(){
	var x=document.pengunjung.nama.value;//menangkap inputan nama ke variable x
	var y="Selamat Datang,"+x;//mendeklarasi variable y ditambah kata yg di input
	alert(y);//menampilan pop up berupa isi variable y
}
function hitung(){
			var not9=document.ini.a.value;//menangkap inputan string dari user ke variable not9
			var a=Number(not9)*4000000;//variable not9 dibaca menjadi integer dikali harganya di simpan ke variable a
			var not5=document.ini.b.value;//sama
			var b=Number(not5)*2000000;//sama
			var mi9=document.ini.c.value;
			var c=Number(mi9)*9000000;
			var poco=document.ini.d.value;
			var d=Number(poco)*4500000;
			var real=document.ini.e.value;
			var e=Number(real)*3500000;
			var jml=Number(a)+Number(b)+Number(c)+Number(d)+Number(e);//menghitung jumlah keseluruhan harga barang,dijumlahkan harga tiap barang(variable a+b+c+d+e)
			var uang=document.ini.f.value;//menangkap inputan uang yang dimiliki
			var kembalian=Number(uang)-Number(jml);//mengitung kembalian dari uang dikurangi jumlah keseluruhan
			document.ini.total.value=jml;//tag input namanya total yang checkbox diisi nilai variable jml
			document.ini.kembalian.value=kembalian;//tag namanya kembalian diisi nilai variable kembalian
    	}
function hitungkom(){
			var rog=document.ini.a.value;//menangkap inputan string dari user ke variable rog
			var a=Number(rog)*20000000;//variable rog dibaca menjadi integer dikali harganya di simpan ke variable a
			var aw=document.ini.b.value;//sama
			var b=Number(aw)*25000000;//sama
			var pre=document.ini.c.value;
			var c=Number(pre)*15000000;
			var omen=document.ini.d.value;
			var d=Number(omen)*10000000;
			var msi=document.ini.e.value;
			var e=Number(msi)*22000000;
			var jml=Number(a)+Number(b)+Number(c)+Number(d)+Number(e);//menghitung jumlah keseluruhan harga barang,dijumlahkan harga tiap barang(variable a+b+c+d+e)
			var uang=document.ini.f.value;//menangkap inputan uang yang dimiliki
			var kembalian=Number(uang)-Number(jml);//mengitung kembalian dari uang dikurangi jumlah keseluruhan
			document.ini.total.value=jml;//tag input namanya total yang checkbox diisi nilai variable jml
			document.ini.kembalian.value=kembalian;//tag namanya kembalian diisi nilai variable kembalian
    	}
