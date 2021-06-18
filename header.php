<head>
	<title>KPop Song Fans Club</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<div class="imageheader">
	<img src="img/header.jpg">
</div>
<?php
	if(isset($_GET['page'])){
		$a = $_GET['page'];
	} else {
		$a = 'home';;
	}

	$page = $a;
?>
<div class="menu">
	<a href="index.php" class="link <?php if($page =="home") echo("active"); ?>">Home</a>
	<a href="index.php?page=player" class="link <?php if($page =="player" or $page =="player_edit" or $page =="player_input") echo("active"); ?>">Player</a>
	<a href="index.php?page=album" class="link <?php if($page =="album" or $page =="album_edit" or $page =="album_input") echo("active"); ?>">Album</a>
	<a href="index.php?page=artist" class="link <?php if($page =="artist" or $page =="artist_edit" or $page =="artist_input") echo("active"); ?>">Artist</a>
	<a href="index.php?page=track" class="link <?php if($page =="track" or $page =="track_edit" or $page =="track_input") echo("active"); ?>">Track</a>
	<a href="index.php?page=profile" class="link <?php if($page =="profile") echo("active"); ?>">Profile</a>
</div>
<div class="maininfo">
<?php
	if(isset($_GET['page'])){
		include $_GET['page'] . ".php";			
	} else{
		include 'main.php';
	}	
	
?>
</div>