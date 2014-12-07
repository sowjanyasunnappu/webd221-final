<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Sowjanya S.">
	<title>UI Brush</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href='style/normalize.css'>
	<link rel="stylesheet" href="style/main.css">

	<link rel="stylesheet" href="style/bxslider.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="script/jquery.bxslider.js"></script>
	</head>
<body>
	<nav>
		<div class="contain">
			<a id="navbutton" href=""></a>
			<h1 id="logo"><a href="index.php"><span class="highlight">UI</span>Brush</a></h1>
			
			<a id="right-panel-link" href="#menu"><i class="fa fa-bars"></i></a>
			
			<ul id="menu" class="panel">
				<li><a <?php if($page_title == "UIBrush | Home" ) {echo 'class="active"';} ?> href="index.php">home</a></li>
				<li><a <?php if($page_title == "UIBrush | About Us" ) {echo 'class="active"';} ?> href="about.php">about us</a></li>
				<li><a href="">Services</a></li>
				<li><a <?php if($page_title == "UIBrush | Portfolio" ) {echo 'class="active"';} ?> href="portfolio.php">Portfolio</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>
		</div>
	</nav>