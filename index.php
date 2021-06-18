<?php  
	
 	require_once "app/player.php";
 	session_start();
	if(!isset($_SESSION['ID'])){
		header("location: login.php");
	}	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>KPop Song Fans Club</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<?php 
include "header.php";
?>	
</body>
</html>