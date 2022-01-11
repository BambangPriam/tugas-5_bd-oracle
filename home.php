<center><br><br><br><br><br><br><br><br>
<img src="assets/images/logo_upb.png" width="200px height="200px" /> <br>
<font Size="6" face="Helvetica">Sistem Informasi Akademik</font> <br>
<font Size="6">Universitas Pelita Bangsa</font>
</center>

<?php
		$conn = oci_connect('bambang764', 'bambang764', 'localhost/XE'); // koneksi kedalam database

//mengecek koneksi apakah berhasil atau tidak
$sql_query = 'SELECT COUNT(*) AS NUMBER_OF_ROWS FROM mhs_laki';

$stmt= oci_parse($conn, $sql_query);

oci_define_by_name($stmt, 'NUMBER_OF_ROWS', $number_of_rows);

oci_execute($stmt);

oci_fetch($stmt);
echo "Jumlah mahasiswa laki-laki adalah : <br> ";
echo $number_of_rows;
echo " orang <br>";



		?>
		
		<?php
		$conn = oci_connect('bambang764', 'bambang764', 'localhost/XE'); // koneksi kedalam database

//mengecek koneksi apakah berhasil atau tidak
$sql_query = 'SELECT COUNT(*) AS NUMBER_OF_ROWS FROM mhs_perempuan';

$stmt= oci_parse($conn, $sql_query);

oci_define_by_name($stmt, 'NUMBER_OF_ROWS', $number_of_rows);

oci_execute($stmt);

oci_fetch($stmt);
echo "Jumlah mahasiswa perempuan adalah : <br> ";
echo $number_of_rows;
echo " orang <br>";



		?>
		</table>
		</center>
	</body>
	</html>
	