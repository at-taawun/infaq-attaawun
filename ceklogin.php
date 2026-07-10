<?php
session_start();
include('koneksi.php');
$usr=$_POST['usr'];
$pass=$_POST['psw'];
$userinfo = $_SERVER['HTTP_USER_AGENT'];

$query="SELECT name,usr,pass FROM lapangan_user where usr='".$usr."' and pass='".$pass."'";
//echo $query;
if ($result=mysqli_query($opr,$query))
	{	
		$rowcount=mysqli_num_rows($result);
			if($rowcount>0)
				{				
					 $qq="update lapangan_user set last_login_id='".$userinfo."',last_login=now() where name='".$usr."' and pass='".$pass."'";
					 mysqli_query($opr,$qq);
					
					$edp="select c.nik,c.nama,bagian,jab,coverage,toko,officer,nm_officer from (select a.nik,nama,bagian,jab,coverage,toko,officer from (select nik,nama,bagian,jab from struktur_edp where nik='".$usr."') a left join (select nik,coverage,officer,count(*) as toko from master_coverage where nik='".$usr."' group by nik) b on (a.nik=b.nik)) c left join (select nik,nama as nm_officer from struktur_edp) d on (c.officer=d.nik)";					
					$h=mysqli_query($opr,$edp);
					while($row=mysqli_fetch_array($h))
					{ $a_edp[$row['nik']]=$row; }
				
						$_SESSION["status"]="login";
						$_SESSION["usr"]=$usr;
						$_SESSION["nama"]=$a_edp[$usr]['nama'];
						$_SESSION["bagian"]=$a_edp[$usr]['bagian'];
						$_SESSION["jab"]=$a_edp[$usr]['jab'];
						$_SESSION["coverage"]=$a_edp[$usr]['coverage'];
						$_SESSION["jml_toko"]=$a_edp[$usr]['toko'];
						$_SESSION["officer"]=$a_edp[$usr]['nm_officer'];
								 
						$ins_log="insert into lapangan_log value(curdate(),'".$_SESSION["usr"]."','Percobaan Login Berhasil!!!','".$userinfo."',now())";
						mysqli_query($opr,$ins_log); 
						
					 header("location:index.php"); 
					
				} else
					{
						
						$ins_log="insert into lapangan_log value(curdate(),'$usr','Percobaan Login dengan pass ".$pass." Gagal!!!','".$userinfo."',now())";
						mysqli_query($opr,$ins_log); 
						header("location:index.php?id=admin&pesan=User / Password Salah!!!"); 
					}
	}
?>