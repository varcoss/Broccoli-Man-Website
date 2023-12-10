<!DOCTYPE html>
<html lang="en">
<head>
<title>We Got You</title>
<meta charset="utf-8">
<meta name="viewport" content="Got you bad">
<link href="broccoli.css" rel="stylesheet">
</head>
<body class="bodyBackground">

<div onmouseover="playMusic()">

  <main class="mainBackgroundIndex  fade-in">
  
	<p class="leftTopText fade-in-text">
	<?php
	$visitorIP = $_SERVER['REMOTE_ADDR'];
	echo $visitorIP;
	?>
	</p>

	<audio controls autoplay loop>
	<source src="gangster_music.mp3" type="audio/mpeg" >
		
  </main>


  </div>
</body>