<h2>Daftar Album KPOP</h2>
<?php
require_once "app/player.php";

 $artist = new Player();
 $rows = $artist->tampil_album();

 ?>

<form action="" method="POST" class="masuk">
 <table>
 <tr>
 <td>ID</td>
 <td>ARTIST</td>
 <td>NAMA ALBUM</td>
 <td>AKSI</td>
 </tr>

 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['album_id']; ?></td>
 <td><?php echo $row['artist_name']; ?></td>
 <td><?php echo $row['album_name']; ?></td>
 <td><span class="pilihan"><a class="aksi lihat " href="index.php?id=<?php echo $row['album_id']?>&page=album_edit">Edit</a><a class="aksi hapus" href="album_hapus.php?id=<?php echo $row['album_id']?>">Hapus</a></span></td>
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
		header("location: index.php?page=album_input");
	}
?>