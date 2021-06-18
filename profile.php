<?php 
	if(!isset($_SESSION['ID'])){
		header("location: login.php");
	}
	$page = "Profile";
	//echo $_SESSION['ID'];
	//echo $_SESSION['nama'];
	//echo $_SESSION['level'];
	if($_SESSION['level'] == 1){
		include "profile_admin.php";
	}
	else{
		include "profile_member.php";
	}
?>
