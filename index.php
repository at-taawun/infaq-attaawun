<html>
<title>.: Cash Flow Infaq Masjid At-Ta'awun :.</title>
<head>
<link rel="shortcut icon" type="image/x-icon" href="image/faviconi.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
		body,form { border-collapse: collapse; font-family: system-ui, sans-serif; width:97%; line-height: 1.2;}
		input[type=submit] { width: 100 px; background-color: #0099ff; color: white; padding: 3px 4px; margin: 2px 0; border: none; border-radius: 3px; cursor: pointer; font-family: system-ui, sans-serif;  font-size:9px;}	
		input[type=submit]:hover { background-color: #007acc; }
		.a:hover { font-color: red; border-radius:8px; padding-left:0px;}
		div.sticky { position: -webkit-sticky; position: sticky; top: 0px; padding: 0px; height : 112px; }
		div.sticky1 { position: -webkit-sticky; position: sticky; top: 0px; padding: 0px; height : 329px; }
		.bg { background-color: #ffffff;}
		div.text{font-family: system-ui, sans-serif; font-size: 11px;}
		table, td, th { border: 1px solid #ddd; padding: 2px; padding-right: 3px; padding-left: 3px; }
		.be{ width: 50px; padding: 1px 1px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius: 3px; box-sizing: border-box; font-family:calibri; font-size: 8px;}
		.be2{ width: 65px; padding: 1px 1px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius: 3px; box-sizing: border-box; font-family:calibri; font-size: 8px;}
		.jumlah[type=text] { width: 80px; padding: 1px 1px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:100%;}
		.keter[type=text] { width: 270px; padding: 1px 1px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:100%;}
		.nama[type=text] { width: 60px; padding: 1px 1px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:100%;}
		.keter2[type=text] { width: 120px; padding: 1px 1px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:100%;}
		.tgl[type=date] { width: 90px; padding: 2px 0px; margin: 2px 0; display: inline-block; border: 1px solid #ddd; font-family: calibri; border-radius: 3px; font-size:100%;}	
		.select { width: 250px; padding: 2px 4px; margin: 2px 0; display: inline-block; border: 1px solid #ddd; border-radius: 3px; box-sizing: border-box; font-family: system-ui, sans-serif; font-size: 11px; }
		#grad3 { background-color: red; background-image: linear-gradient(180deg, #ffffff, #d9d9d9);}
	
	</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body style="background-image: url('asset/bgr1.png'); background-repeat: yes;background-size: 70%;">
<?php 
session_start();
include('koneksi.php');
$bulan=array('','Januari','Febuari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
$bul=array('','JAN','FEB','MAR','APR','MEI','JUN','JUL','AGS','SEP','OKT','NOV','DES');
$now=date('Y-m-d', strtotime("0 months"));
$now2=date('Y-m-d', strtotime("-1 days"));
$bor=0;
$bor2=0;

if($_SESSION["status"]=="login")
{ 
echo 
	"<table align=center style='border-collapse: collapse; border: $bor solid #ddd; margin-top:45px; margin-left:auto;'>
		<th width=350px style='border-collapse: collapse; border: $bor solid #ddd; padding-bottom:10px; padding-left:20px; padding-right:20px;'>
			<mark style=' font-size:125%; padding-top:3px; padding-bottom:7px; padding-left:15px; padding-right:30px; background:#008000; color:white; border-radius:7px; text-shadow: 1px 1px 2px black; box-shadow: 2px 1px 2px #bfbfbf'><i class='fa fa-line-chart' style='color:white; padding-right:4px;'></i>
			</mark>
			
			<mark style=' font-size:125%; padding-top:3px; padding-bottom:7px; margin-left:-30px; padding-left:15px; padding-right:15px;  background:#006600; color:white; border-radius:7px; text-shadow: 1px 1px 2px black; box-shadow: 2px 1px 2px #bfbfbf'>LAPORAN INFAQ</mark>
				
		<div style='margin-top:5px; margin-bottom:10px;'>
			<mark style='font-size:75%; padding-top:3px; padding-bottom:3px; padding-left:10px; padding-right:10px; background:#ffcc00; color:black; border-radius:5px; text-shadow: 1px 1px 2px #bfbfbf; box-shadow: 2px 2px 3px black'>Masjid At-Ta'awun
			</mark>
		</div>
		</th>
	<tr>
		<th align=center style='border-collapse: collapse; border: $bor solid #ddd; font-size:90%; padding-bottom:3px; padding-top:5px; text-shadow: 2px 1px 2px #bfbfbf'>
			<div style='margin-top:5px; margin-bottom:10px;'>
				<a class='a' style='text-decoration: none; color: black; font-weight:none; border-radius:3px; padding-left:5px; padding-right:3px;' href='index.php?id=laporan' target='_self'>
					<i class='fa fa-home' style='color:#006600; padding-right:4px; text-shadow: 2px 1px 2px #bfbfbf'></i>Laporan Kas
				</a>
				<a class='a' style='text-decoration: none; color: black; font-weight:none; border-radius:3px; padding-left:5px; padding-right:3px;' href='index.php?id=masuk' target='_self'> 
					<i class='fa fa-download' style='color:#0066cc; padding-right:4px; text-shadow: 2px 1px 2px #bfbfbf'></i>Catatan Masuk
				</a> 
				<a class='a' style='text-decoration: none; color: black; font-weight:none; border-radius:3px; padding-left:5px; padding-right:3px;' href='index.php?id=keluar' target='_self'> 
					<i class='fa fa-upload' style='color:#9900cc; padding-right:4px; text-shadow: 2px 1px 2px #bfbfbf'></i>Catatan Keluar
				</a>
			</div>
		</th>
	</table>";
	
	
if($_GET['id']=="masuk")
	{include('input_kas_form.php'); } 
else if($_GET['id']=="keluar")
	{include('input_kas_form.php'); } 
else if($_GET['id']=="laporan")
	{include('laporan_kas.php'); } 
else
	{ include('laporan_kas.php'); }

} else
{
	include('login.php');
}

?>

<script>
function myFunction() {
var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) 
  {
     td = tr[i].getElementsByTagName("td")[1]; // Nama Toko
     td1 = tr[i].getElementsByTagName("td")[3]; // IP STB
     td2 = tr[i].getElementsByTagName("td")[4]; // Ping STB
     td2 = tr[i].getElementsByTagName("td")[5]; // Siaran
     td3 = tr[i].getElementsByTagName("td")[6]; // Agent0
     td4 = tr[i].getElementsByTagName("td")[7]; // TglSTB0
     td5 = tr[i].getElementsByTagName("td")[13]; // Agent1
     td6 = tr[i].getElementsByTagName("td")[15]; // TglSTB1
     td7 = tr[i].getElementsByTagName("td")[16]; // Agent2
     td8 = tr[i].getElementsByTagName("td")[20]; // TglSTB2
     td9 = tr[i].getElementsByTagName("td")[24]; // EDP
    if (td) 
	{
      if ( (td.innerHTML.toUpperCase().indexOf(filter) > -1) || (td1.innerHTML.toUpperCase().indexOf(filter) > -1) || (td2.innerHTML.toUpperCase().indexOf(filter) > -1) || (td3.innerHTML.toUpperCase().indexOf(filter) > -1) || (td4.innerHTML.toUpperCase().indexOf(filter) > -1) || (td5.innerHTML.toUpperCase().indexOf(filter) > -1) || (td6.innerHTML.toUpperCase().indexOf(filter) > -1) || (td7.innerHTML.toUpperCase().indexOf(filter) > -1) || (td8.innerHTML.toUpperCase().indexOf(filter) > -1) || (td9.innerHTML.toUpperCase().indexOf(filter) > -1))  
	  {            
        tr[i].style.display = "";
	  } else 
		{
		 tr[i].style.display = "none";
		}
    }
  }
} 
</script>

</body>
</html>