<h2>Daftar nama Artist KPOP</h2>
<?php
	
 require_once "app/player.php";

 $artist = new Player();
 $rows = $artist->tampil_artist();

 ?>

<form action="" method="POST" class="masuk">
 <table>
 <tr>
 <td>ID</td>
 <td>NAMA</td>
 <td>AKSI</td>
 </tr>

 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['artist_id']; ?></td>
 <td><?php echo $row['artist_name']; ?></td>
 <td><span class="pilihan"><a class="aksi lihat " href="index.php?id=<?php echo $row['artist_id']?>&page=artist_edit">Edit</a><a class="aksi hapus" href="artist_hapus.php?id=<?php echo $row['artist_id']?>">Hapus</a></span></td>
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
		header("location: index.php?page=artist_input");
	}
?>