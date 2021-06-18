<?php

class Player {
private $db;
public function __construct()
 {
 try {

 $this->db =
 new PDO("mysql:host=localhost;dbname=utspbwl", "root", "");

 } catch (PDOException $e) {
die ("Error " . $e->getMessage());
 }
 }

//Fungsi Dibagian ini

public function tampil_album()
 {
 $sql = "SELECT album_id, album_name, artist_name FROM album , artist WHERE album.artist_id = artist.artist_id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->execute();

 $data = [];
 while ($rows = $stmt->fetch()) {
 $data[] = $rows;
 }

 return $data;
}

public function tampil_user()
 {
 $sql = "SELECT * FROM member"; 
 $stmt = $this->db->prepare($sql);
 $stmt->execute();

 $data = [];
 while ($rows = $stmt->fetch()) {
 $data[] = $rows;
 }

 return $data;
}

public function tampil_artist()
 {
 $sql = "SELECT * FROM artist"; 
 $stmt = $this->db->prepare($sql);
 $stmt->execute();

 $data = [];
 while ($rows = $stmt->fetch()) {
 $data[] = $rows;
 }

 return $data;
}

public function tampil_track()
 {
 $sql = "SELECT track_id, track_name, artist_name, album_name, time  FROM album , artist, track WHERE track.artist_id = artist.artist_id AND track.album_id = album.album_id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->execute();

 $data = [];
 while ($rows = $stmt->fetch()) {
 $data[] = $rows;
 }

 return $data;
}

public function tampil_played()
 {
 $sql = "SELECT artist_name, played.artist_id, album_name, track_name, played FROM played, artist, album, track WHERE played.artist_id = artist.artist_id AND played.album_id = album.album_id AND played.track_id = track.track_id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->execute();

 $data = [];
 while ($rows = $stmt->fetch()) {
 $data[] = $rows;
 }

 return $data;
}

public function hapus_artist()
{
 $sql = "SELECT * FROM artist WHERE artist_id = :id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->bindparam(":id", $_GET['id']);
 $stmt->execute();

	$sql = "DELETE FROM artist WHERE artist_id = :id";
	$stmt = $this->db->prepare($sql);
 	$stmt->bindparam(":id", $_GET['id']);
	$stmt->execute();
	header("location: index.php?page=artist");

}


public function tambah_artist()
{
	$sql = "INSERT INTO artist VALUES ('',:nama)";
	$stmt = $this->db->prepare($sql); 
	$stmt->bindparam(":nama", $_POST['nama']);
	$stmt->execute();
	header("location: index.php?page=artist");

}

public function hapus_album()
{
 $sql = "SELECT * FROM album WHERE album_id = :id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->bindparam(":id", $_GET['id']);
 $stmt->execute();

	$sql = "DELETE FROM album WHERE album_id = :id";
	$stmt = $this->db->prepare($sql);
 	$stmt->bindparam(":id", $_GET['id']);
	$stmt->execute();
	header("location: index.php?page=album");

}

public function tambah_album()
{
	$sql = "INSERT INTO album VALUES ('', :artist, :nama)";
	$stmt = $this->db->prepare($sql); 
	$stmt->bindparam(":nama", $_POST['nama']);
	$stmt->bindparam(":artist", $_POST['artist']);
	$stmt->execute();
	header("location: index.php?page=album");

}


public function hapus_player()
{
 $sql = "SELECT * FROM played WHERE played = :id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->bindparam(":id", $_GET['id']);
 $stmt->execute();

	$sql = "DELETE FROM played WHERE played = :id AND artist_id=:artist";
	$stmt = $this->db->prepare($sql);
 	$stmt->bindparam(":id", $_GET['id']);
	$stmt->bindparam(":artist", $_GET['artist']);
	$stmt->execute();
	header("location: index.php?page=player");

}

public function update_artist()
{
 $sql = "SELECT * FROM artist WHERE artist_id = :id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->bindparam(":id", $_GET['id']);
 $stmt->execute();

	$sql = "UPDATE artist SET artist_name = :name WHERE artist_id = :id";
	$stmt = $this->db->prepare($sql);
	$stmt -> bindParam(":id", $_GET['id']);
	$stmt -> bindParam(":name", $_POST['nama']);
	$stmt->execute();
	header("location: index.php?page=artist");

}

public function update_player()
{
 $sql = "SELECT * FROM played WHERE played = :id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->bindparam(":id", $_GET['id']);
 $stmt->execute();

	$sql = "UPDATE played SET artist_id = :artist, album_id = :album, track_id = :track  WHERE played = :id";
	$stmt = $this->db->prepare($sql);
	$stmt -> bindParam(":id", $_GET['id']);
	$stmt -> bindParam(":artist", $_POST['artist']);
	$stmt -> bindParam(":album", $_POST['album']);
	$stmt -> bindParam(":track", $_POST['track']);
	$stmt->execute();
	header("location: index.php?page=player");

}

public function update_album()
{
 $sql = "SELECT * FROM album WHERE album_id = :id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->bindparam(":id", $_GET['id']);
 $stmt->execute();

	$sql = "UPDATE album SET album_name = :name, artist_id = :artist WHERE album_id = :id";
	$stmt = $this->db->prepare($sql);
	$stmt -> bindParam(":id", $_GET['id']);
	$stmt -> bindParam(":name", $_POST['nama']);
	$stmt -> bindParam(":artist", $_POST['artist']);
	$stmt->execute();
	header("location: index.php?page=album");

}
public function update_track()
{
 $sql = "SELECT * FROM track WHERE track_id = :id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->bindparam(":id", $_GET['id']);
 $stmt->execute();

	$sql = "UPDATE track SET track_name = :name, artist_id = :artist, album_id = :album WHERE track_id = :id";
	$stmt = $this->db->prepare($sql);
	$stmt -> bindParam(":id", $_GET['id']);
	$stmt -> bindParam(":name", $_POST['nama']);
	$stmt -> bindParam(":artist", $_POST['artist']);
	$stmt -> bindParam(":album", $_POST['album']);
	$stmt->execute();
	header("location: index.php?page=track");

}

public function hapus_track()
{
 $sql = "SELECT * FROM track WHERE track_id = :id"; 
 $stmt = $this->db->prepare($sql);
 $stmt->bindparam(":id", $_GET['id']);
 $stmt->execute();

	$sql = "DELETE FROM track WHERE track_id = :id";
	$stmt = $this->db->prepare($sql);
 	$stmt->bindparam(":id", $_GET['id']);
	$stmt->execute();
	header("location: index.php?page=track");

}

public function tambah_track()
{
	$sql = "INSERT INTO artist VALUES ('', :nama, :artist , :album, :durasi)";
	$stmt = $this->db->prepare($sql); 
	$stmt->bindparam(":nama", $_POST['nama']);
	$stmt->bindparam(":artist", $_POST['artist']);
	$stmt->bindparam(":album", $_POST['album']);
	$stmt->bindparam(":durasi", $_POST['durasi']);
	$stmt->execute();
	header("location: index.php?page=track");

}

public function tambah_played()
{
	$sql = "INSERT INTO played VALUES (:artist, :album, :track, Current_timestamp)";
	$stmt = $this->db->prepare($sql);
	$stmt -> bindParam(":artist", $_POST['artist']);
	$stmt -> bindParam(":album", $_POST['album']);
	$stmt -> bindParam(":track", $_POST['track']);
	$stmt->execute();
	header("location: index.php?page=player");

}

public function login()
 {
	 $sql = "SELECT * From member WHERE member_nama = :user_nama AND member_password = :user_pass";
	 $stmt = $this->db->prepare($sql);
	$stmt->bindparam(":user_nama", $_POST['user_nama']);
	$stmt->bindparam(":user_pass", $_POST['user_pass']);
	$stmt->execute();
	
 	$login = $stmt->fetch();
	if ($stmt->rowcount() == 0) {
		echo ("<div class='gagal'>Login Gagal</div>");
	} else 
	{
		session_start();
		$_SESSION["ID"] = $login['member_id'];
		$_SESSION["nama"] = $login['member_nama'];
		$_SESSION["status"] = $login['status'];
		$_SESSION["phone"] = $login['member_phone'];
		$_SESSION["level"] = $login['member_level'];
		$_SESSION["password"] = $login['member_password'];
	header("location: ./index.php");
	exit;
	}
}


}
