<?php

include('koneksi.php');
$info=$_SERVER['HTTP_USER_AGENT'];
$jumlah=$_POST['jumlah'];
$keterangan=$_POST['keterangan'];

$insert="insert into transaksi values(curdate(),$jumlah,'masuk','$keterangan','$info',now())";
mysqli_query($opr,$insert);

echo $insert;

header("location:index.php?id=laporan"); 



?>