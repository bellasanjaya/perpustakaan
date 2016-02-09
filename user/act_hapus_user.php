<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	die ("Error. No id Selected! ");	
}
?>

<?php
include "../include/koneksi_db.php"; //memanggil file koneksi_db.php
include "../include/config.php"; //memanggil file fungsi.php
include "../include/fungsi.php"; //memanggil file fungsi.php

if (!empty($id) && $id != "") {
$query = "DELETE FROM admin WHERE id='$id'";
$sql = mysql_query ($query);
	If ($sql) {
echo "<script>alert('Data berhasil dihapus')</script>";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
} else {
echo "Data anda gagal dihapus. Ulangi sekali lagi";
echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
}
}else {
		die ("Access Denied");	
	}
?>
