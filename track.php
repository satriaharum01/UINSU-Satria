<h2>Daftar Track Artist KPOP</h2>
<?php
	
 require_once "app/player.php";

 $track = new Player();
 $rows = $track->tampil_track();

 ?>

<form action="" method="POST" class="masuk">
 <table>
 <tr>
 <td>ID</td>
 <td>TRACK NAMA</td>
 <td>ARTIST</td>
 <td>ALBUM</td>
 <td>DURASI</td>
 <td>AKSI</td>
 </tr>

 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['track_id']; ?></td>
 <td><?php echo $row['track_name']; ?></td>
 <td><?php echo $row['artist_name']; ?></td>
 <td><?php echo $row['album_name']; ?></td>
 <td><?php echo $row['time']; ?></td>
 <td><span class="pilihan"><a class="aksi lihat " href="index.php?id=<?php echo $row['track_id']?>&page=track_edit">Edit</a><a class="aksi hapus" href="track_hapus.php?id=<?php echo $row['track_id']?>">Hapus</a></span></td>
 </tr>

 <?php } ?>
</table> </form>
<p>
		<form class="pilihan" method="POST">
		<input class="btn tambah" type="submit" name="tambah" value="Tambah Data">
		</form>
	</p>
<?php
if(isset($_POST['tambah']))
	{
		header("location: index.php?page=track_input.php");
	}
?>