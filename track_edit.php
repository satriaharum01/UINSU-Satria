<?php
if(isset($_POST['kembali']))
	{
		header("location: index.php?page=track");
	}
if(isset($_POST['tombol']))
	{
		 $track = new Player();
 		 $rows = $track->update_track();
	}
?>	
<form action="" method="POST" class="masuk">
	<h2>Edit Data Track</h2>
		<table>
			<tr>
				<td>Track ID</td>
				<td><input type="text" name="ID" disabled="yes" value="<?php echo $_GET['id']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Track</td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama Track"></td>
			</tr>
			<tr>
				<td>Pilih Artist</td>
				<td><select class="select" name="artist">
					<?php
					
					$sql_artist = new Player();
					$rows = $sql_artist->tampil_artist();

					foreach ($rows as $row) { ?>

					?>
						<option><?php echo $row['artist_id'] . " - ";;echo $row['artist_name'] ;?></option>";
					
					<?php }
						
					 ?>
				</select></td>
			</tr>
			<tr>
				<td>Pilih Album</td>
				<td><select class="select" name="album">
					<?php
					$sql_album = new Player();
					$rows = $sql_album->tampil_album();

					foreach ($rows as $row) { ?>

					?>
						<option><?php echo $row['album_id'] . " - ";;echo $row['album_name'] . " - " ; echo $row['artist_name'] ;?></option>";
					
					<?php }
						
					 ?>
					</select></td>
			</tr>
			<tr>
				<td>Durasi</td>
				<td><input type="number" name="durasi" placeholder="0.0"></td>
			</tr>
			</table>
			<p></p>
			<div class="pilihan">
				<input class="btn tambah" type="submit" value="Simpan" name="tombol">
				<input class="btn hapus" type="submit" value="Kembali" name="kembali">
		</div>
	</form>