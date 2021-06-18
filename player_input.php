<?php
if(isset($_POST['kembali']))
	{
		header("location: index.php?page=player");
	}
if(isset($_POST['tombol']))
	{
		 $player = new Player();
 		 $rows = $player->tambah_played();
	}
?>	<form action="" method="POST" class="masuk">
	<h2>Input Data Player</h2>
		<table>
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
				<td>Pilih Track</td>
				<td><select class="select" name="track">
					<?php
					$sql_album = new Player();
					$rows = $sql_album->tampil_track();

					foreach ($rows as $row) { ?>

					?>
						<option><?php echo $row['track_id'] . " - ";;echo $row['track_name']  ;?></option>";
					
					<?php }
						
					 ?>
					</select></td>
			</tr>
			</table>
			<p></p>
			<div class="pilihan">
				<input class="btn tambah" type="submit" value="Simpan" name="tombol">
				<input class="btn hapus" type="submit" value="Kembali" name="kembali">
		</div>
	</form>
<form action="" method="POST" class="masuk">