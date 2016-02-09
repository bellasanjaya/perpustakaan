<form method="post" action="pengunjung/aksi_pengunjung.php" name="pengunjung">
	<center><h3>.:: Silahkan Isi Buku Tamu ::.</h3><hr></center>
	<table border="0" width="100%" cellpadding="2" id="table1">
		<tr>
			<td width="35%">Nama</td>
			<td><input type="text" name="nama" required size="20"></td>
		</tr>
		<tr>
			<td width="35%">Jenis Kelamin</td>
			<td><input type="radio" value="L" required name="jk"> Laki-Laki &nbsp;&nbsp;
			<input type="radio" value="P" required name="jk"> Perempuan</td>
		</tr>
		<tr>
			<td width="35%">Pekerjaan</td>
			<td><select size="1" name="kelas" required>
			<option selected value="">- Pilih -</option>
			<option value="SD">SD</option>
			<option value="SMP">SMP</option>
			<option value="SMA">SMA</option>
			<option value="Guru">Guru</option>
			<option value="Mahasiswa">Mahasiswa</option>
			<option value="Lain">Lainnya</option>
			</select>
			</td>
		</tr>
		<tr>
			<td width="35%" valign="top">Keperluan</td>
			<td>
			<input type="checkbox" name="perlu1" value="Pinjam Buku"> Pinjam Buku<br>
			<input type="checkbox" name="perlu2" value="Kembalikan Buku"> Kembalikan Buku<br>
			<input type="checkbox" name="perlu3" value="Baca Buku"> Baca Buku<br>
			<input type="checkbox" name="perlu4" value="Lainnya"> Lainnya</td>
		</tr>
		<tr>
			<td width="35%">Informasi yang dicari</td>
			<td><textarea rows="5" name="cari" required cols="25"></textarea></td>
		</tr>
		<tr>
			<td width="35%">Saran-saran</td>
			<td><textarea rows="4" name="saran" cols="25"></textarea></td>
		</tr>
		<tr>
			<td width="35%">&nbsp;</td>
			<td><input type="submit" value="Submit" name="B1">&nbsp;&nbsp;&nbsp;
			<input type="reset" value="Reset" name="B2"></td>
		</tr>
	</table>
</form>