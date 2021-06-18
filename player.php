<h2>Daftar Putar Lagu Artist KPOP</h2>
<?php
 require_once "app/player.php";
 $played = new Player();
 $rows = $played->tampil_played();

 ?>

<form action="" method="POST" class="masuk">
 <table>
 <tr>
 <td>DiPUTAR</td>
 <td>ARTIST</td>
 <td>ALBUM</td>
 <td>TRACK</td>
 <td>AKSI</td>
 </tr>

 <?php foreach ($rows as $row) { ?>

 <tr>
 <td><?php echo $row['played']; ?></td>
 <td><?php echo $row['artist_name']; ?></td>
 <td><?php echo $row['album_name']; ?></td>
 <td><?php echo $row['track_name']; ?></td>
 <td><span class="pilihan"><a class="aksi lihat " href="index.php?id=<?php echo $row['played']?>&page=player_edit">Edit</a><a class="aksi hapus" href="player_hapus.php?id=<?php echo $row['played']?>&artist=<?php echo $row['artist_id']?>">Hapus</a><a class="aksi putar" href="">Play</a>
    </span></td>
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
		header("location: index.php?page=player_input");
	}
?>