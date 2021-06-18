<?php
if(isset($_POST['kembali']))
	{
		header("location: index.php?page=artist");
	}
if(isset($_POST['tombol']))
	{
		 $artist = new Player();
 		 $rows = $artist->tambah_artist();
	}
?>	
<form action="" method="POST" class="masuk">
	<h2>Input Data Artist</h2>
		<table>
			<tr>
				<td>Nama Artist</td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama Artist"></td>
			</tr>
			</table>
			<p></p>
			<div class="pilihan">
				<input class="btn tambah" type="submit" value="Simpan" name="tombol">
				<input class="btn hapus" type="submit" value="Kembali" name="kembali">
		</div>
	</form>