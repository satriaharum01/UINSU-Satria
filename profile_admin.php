<?php 
	if(isset($_POST['tombol'])) {
		header("location: admin_edit.php");
	}
?>
	<form action="" method="POST" class="masuk">
	<h2>Halaman Profile</h2>
		<h2> Selamat Datang <?php echo $_SESSION['nama'] ?> </h2>
		<table>
			<tr>
				<td>ID</td>
				<td><?php echo $_SESSION['ID']; ?></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><?php echo $_SESSION['nama'];?></td>
			</tr>
			<tr>
				<td>PHONE</td>
				<td><?php echo $_SESSION['phone'];?></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><?php if($_SESSION['level'] == 1){
				echo "Admin";
				}
				else{
				echo "Member";;
			} ;?>	
			</td>
			</tr>
			<tr>
				<td>PHONE</td>
				<td><?php echo $_SESSION['phone'];?></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><?php echo $_SESSION['password'];?></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><?php echo $_SESSION['status'];?></td>
			</tr>
			</table>
			<p></p>
			<div class="pilihan">
				<input class="btn lihat" type="submit" value="Edit" name="tombol">
				<input class="btn hapus" type="submit" value="Log Out" name="out">
		</div>
	</form>		

<?php
	if(isset($_POST['out'])){
		session_destroy();
		!isset($_SESSION['user']);
		header("location: login.php");
	}

?>