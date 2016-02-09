<html>
<head>
<title>.:: Perpustakaan  ::.</title>
<style type="text/css">
body {
background-color: white;
color: black;
margin-top: 0px;
margin-left: 50px;
margin-right: 50px;
font-family: Times New Roman;
font-size: 14px;
}
</style>
</head>

<body>
<center>
<table border=0 width="900px" bgcolor="white" colspan="0">
	<tr>
	<form action="login.php" name="login" method="post">
		<td style="background: #white; padding: 8px 0 8px 0" colspan="2" align="right">
		Username : <input type="text" name="user" placeholder="perpus" required> Password : <input type="password" name="pass" placeholder="perpus" required> <input type="submit" value="log in">
		</td>
	</form>
	</tr>

	<tr>
		<td colspan="2">
		<marquee behavior="alternate" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
		<b>Selamat Datang</b></marquee>
	</td>
	
	</tr>
	<tr>
	<td width="40%" valign="top" align="center" >
	<?php
	include "include/deteksi.php";
	?>
	</td>
	<td width="60%" style="background: white">
	<?php
	include "pengunjung/pengunjung.php";
	include "include/fungsi2.php";
	?></td>
	<tr>
	<td colspan="2" style="background: white; border-top: solid 2px #f9f9f9; font-size: 12px" align="center">&copy; copyright : STT-PLN &nbsp;<br>All Right Reserved</td>
	</tr>
</table>
</center>