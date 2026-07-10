<html>
<title>.: Login :.</title>
<head>
<link rel="shortcut icon" type="image/x-icon" href="image/faviconi.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
		body,form { border-collapse: collapse; font-family: system-ui, sans-serif; width:98%; line-height: 1.5;}
		input[type=submit] { width: 60px; background-color: #0099ff; color: white; padding: 3px 4px; margin: 2px 0; border: none; border-radius: 3px; cursor: pointer; font-family: system-ui, sans-serif;}	
		input[type=submit]:hover { background-color: #007acc; }
		.a:hover { font-color: red; border-radius:8px; padding-left:5px;}
		div.sticky { position: -webkit-sticky; position: sticky; top: 0px; padding: 0px; height : 112px; }
		div.sticky1 { position: -webkit-sticky; position: sticky; top: 0px; padding: 0px; height : 329px; }
		.bg { background-color: #ffffff;}
		div.text{font-family: system-ui, sans-serif; font-size: 11px;}
		table, td, th { border: 1px solid #ddd; padding: 2px; padding-right: 5px; padding-left: 5px; }
		.tbhead { border-collapse: collapse; margin-top: 7px; margin-bottom: 0px; font-size: 11px; margin-left: -1px; box-shadow: 3px 0px 2px #ddd }
		.tbcontent { border-collapse: collapse; margin-top: 0px; margin-bottom: 10px; font-size: 11px; margin-left: 7px; box-shadow: 3px 3px 2px #ddd}
		.nama[type=text] { width: 60px; padding: 2px 0px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:9px;}
		.keter[type=text] { width: 120px; padding: 2px 0px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:9px;}
		.keter2[type=text] { width: 50px; padding: 2px 0px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:9px;}
		.tgl[type=date] { width: 130px; padding: 2px 0px; margin: 5px 0; display: inline-block; border: 1px solid #ddd; font-family: system-ui, sans-serif; border-radius: 3px;}	
		.select { width: 250px; padding: 2px 4px; margin: 2px 0; display: inline-block; border: 1px solid #ddd; border-radius: 3px; box-sizing: border-box; font-family: system-ui, sans-serif; font-size: 11px; }
		#grad3 { background-color: red; background-image: linear-gradient(180deg, #ffffff, #d9d9d9);}
		.usr[type=text] { width: 100px; padding: 2px 0px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:100%; box-shadow: 2px 2px 2px #ddd }
		.psw[type=password] { width: 100px; padding: 2px 0px; margin: 0px 0; display: inline-block; border: 1px solid #ddd; border-radius:3px; font-size:100%; box-shadow: 2px 2px 2px #ddd }
	
	</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body style="background-image: url('asset/bgr20512.png'); background-repeat: yes;background-size: 50%;">
<?php 
session_start();
include('koneksi.php');
$bulan=array('','Januari','Febuari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
$bul=array('','JAN','FEB','MAR','APR','MEI','JUN','JUL','AGS','SEP','OKT','NOV','DES');
$now=date('Y-m-d', strtotime("0 months"));

$bor_menu=0;
$bor2=1;
$font_table=100;
$font_judul=150;
$font_form=90;

if($_GET['pesan']=="Anda Sudah Logout!") { session_destroy(); }
if($_SESSION["status"]=="login")
{ if($_GET['pesan']=="Anda Sudah Logout!"){ include('index.php'); } else { include('home.php'); }} else
{
	
	echo 
	"<form method=POST action=ceklogin.php>
	<table width=75% align=center bgcolor=white style='border-collapse: collapse; border: $bor_menu solid #ddd; margin-top:205px; font-size:".$font_table."%; box-shadow: 2px 2px 2px #ddd; border-radius:10px;'>
	<tr>
		<td align=center colspan=3 style='border: $bor_menu solid #ddd; padding-top:18px; padding-left:10px;'>
		<i class='fa fa-key' style='color:#ff9900; padding-left:0px; font-size:".$font_judul."%; text-shadow: 2px 1px 2px #bfbfbf; font-weight:bold;'> &nbsp<font color=black>Login</i></td>
	<tr>	
		<td style='border: $bor_menu solid #ddd; padding-top:15px; padding-left:20px; font-size:".$font_form."%;'>User Name</td>
		<td style='border: $bor_menu solid #ddd; padding-top:15px; font-size:".$font_form."%;'>:</td>
		<td style='border: $bor_menu solid #ddd; padding-top:15px; padding-right:20px; font-size:".$font_form."%;'><input class=usr type=text name=usr required></td>
		<tr>
		<td style='border: $bor_menu solid #ddd; padding-left:20px; font-size:".$font_form."%;'>Password</td>
		<td style='border: $bor_menu solid #ddd; font-size:".$font_form."%;'>:</td>
		<td style='border: $bor_menu solid #ddd; font-size:".$font_form."%;'><input class=psw type=password name=psw required></td>
		<tr>
		<td align=left colspan=2 style='font-size:75%; color:#0059b3; font-weight:bold; border: $bor_menu solid #ddd; padding-bottom:10px; padding-left:20px;'><input type=submit name=submit value=Login></td>
		<tr>
		<td align=center colspan=3 style='font-size:55%; color:#666666; font-weight:none; border: $bor_menu solid #ddd; padding-bottom:10px; padding-right:0px;'><i>User : NIK / Password : 123</i></td>
		<tr>
		<td align=center colspan=3 style='font-size:65%; color:red; font-weight:bold; border: $bor_menu solid #ddd; padding-bottom:10px; padding-right:0px;'><i>".$_GET['pesan']."</i></td>
		<tr>
	</table>
	<form>";

}	


?>

</body>
</html>