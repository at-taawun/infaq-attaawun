<style>
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<?php
include('koneksi.php');

echo "<form method='POST' action='input_kas_insert.php'>
				<table align=left style='border: 0px solid #ddd; border-collapse: collapse; margin-top:0px; margin-left:0px; margin-right:0px; margin-bottom:3px; text-shadow: 2px 1px 2px #bfbfbf; font-size:100%;'>";
				
				echo "<td style='border: 0px solid #ddd;'>Jumlah</td>
						<td style='border: 0px solid #ddd;'>:</td>
						<td style='border: 0px solid #ddd;'><input class=jumlah name='jumlah' type='text' required></td>
					<tr>
						<td style='border: 0px solid #ddd;'>Keterangan</td>
						<td style='border: 0px solid #ddd;'>:</td>
						<td style='border: 0px solid #ddd;'><input class=keter name='keterangan' type='text' required></td>
					<tr>
					<tr>
						<td colspan=3 style='border: 0px solid #ddd;'><input type=submit value='Simpan' style='width: 70px; background-color: #0099ff; color: white; padding: 2px 1px 2px 1px; margin: 2px 0; border: none; border-radius: 5px; cursor: pointer; font-family: calibri;  font-size:90%;'></td>";
				echo "</table></form>";


?>