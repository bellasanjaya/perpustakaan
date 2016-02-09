<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/fungsi2.php"; //memanggil file fungsi.php

$id = isset($_POST['id']) ? addslashes($_POST['id']) : "";
$no_induk = isset($_POST['no_induk']) ? addslashes($_POST['no_induk']) : "";
$nama = isset($_POST['nama']) ? addslashes($_POST['nama']) : "";
$jk = isset($_POST['jk']) ? addslashes($_POST['jk']) : "";
$kelas = isset($_POST['kelas']) ? addslashes($_POST['kelas']) : "";
$ttl = isset($_POST['ttl']) ? addslashes($_POST['ttl']) : "";
$alamat = isset($_POST['alamat']) ? addslashes($_POST['alamat']) : "";

$tgl       = $hari_ini;

if ($no_induk==""||$nama==""||$jk==""||$kelas==""||$ttl==""||$alamat=="") {
	echo "<script>alert('Pengisian form belum benar. Ulangi lagi');</script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
} else {
	$cek=mysql_query("SELECT * FROM data_buku WHERE no_induk='$no_induk'", $konek);
	$hasil_cek=mysql_num_rows($cek);

	if ($hasil_cek>0) {
		echo "<script>alert('Data buku dengan no induk $no_induk pernah direkam !')</script>";
	} else {
		$query = mysql_query("INSERT INTO data_buku VALUES (NULL, '$no_induk', '$nama', '$jk', '$kelas', '$ttl', '$alamat', NOW())");

		if ($query) {
			echo "<script>alert('Data berhasil ditambahkan @ $hari_ini. Terima Kasih')</script>";
			echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";
		} else {
			echo "<script>alert('Data anda gagal dimasukkan karena. Ulangi sekali lagi')</script>";
			echo mysql_error();
			//echo "<meta http-equiv='refresh' content='0; url=?page=input_buku'>";
		}
	}
}
?>
