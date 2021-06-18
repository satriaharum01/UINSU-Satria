<?php
if(isset($_POST['kembali']))
	{
		header("location: index.php?page=album");
	}
if(isset($_POST['tombol']))
	{
		 $artist = new Player();
 		 $rows = $artist->tambah_album();
	}
?>	
<form action="" method="POST" class="masuk">
	<h2>Input Data Album</h2>
		<table>
			<tr>
				<td>Nama Album</td>
				<td><input type="text" name="nama" placeholder="Masukkan Nama Album"></td>
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
			</table>
			<p></p>
			<div class="pilihan">
				<input class="btn tambah" type="submit" value="Simpan" name="tombol">
				<input class="btn hapus" type="submit" value="Kembali" name="kembali">
		</div>
	</form>