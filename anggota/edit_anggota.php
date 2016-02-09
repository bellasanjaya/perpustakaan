<?php
include "../include/koneksi_db.php";

$id		= isset($_GET['id']) ? $_GET['id'] : "";

if ($id == "") {
	echo "<script>alert('Pilih dulu data yang akan di-update');</script>";
} else {
	$query		= mysql_query("SELECT * FROM data_anggota WHERE id=$id", $konek);
	$hasil		= mysql_fetch_array($query);
	$id  		= $hasil['id'];
	$no_induk 		= $hasil['no_induk'];
	$nama 		= $hasil['nama'];
	$jk	= $hasil['jk'];
	$kelas 		= $hasil['kelas'];
	$ttl	= $hasil['ttl'];
	$alamat	= $hasil['alamat'];

?>

<form method="post" action="?page=act_edit_anggota">
<table width=100% border=1 class="table-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<tr><td class="head-data" colspan="2">Edit Data Anggota : <?php echo $no_induk; ?></td></tr>
<tr><td class="pinggir-data">No Induk</td>
<td class="pinggir-data"><input type="text" size="55" name="no_induk" value="<?php echo $no_induk; ?>"></td></tr>
<tr><td class="pinggir-data">Nama</td>
<td class="pinggir-data"><input type="text"  size="35" name="nama" value="<?php echo $nama; ?>"></td></tr>
<tr><td class="pinggir-data">Jenis Kelamin</td>
<td class="pinggir-data"><input type="text" size="15"name="jk" value="<?php echo $jk; ?>"></td></tr>
<tr><td class="pinggir-data">Kelas</td>
<td class="pinggir-data"><input type="text" size="55" name="ttl" value="<?php echo $ttl; ?>"></td></tr>
<tr><td class="pinggir-data">Alamat</td>
<td class="pinggir-data"><input type="text" size="20" name="alamat" value="<?php echo $alamat; ?>"></td></tr>

<tr><td class="head-data" colspan="2" align="center">
<input type="submit" value="Update">
</td></tr>
</table>
</form>
<?php
}
?>