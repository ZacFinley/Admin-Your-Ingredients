<?php
	include '../inc/control.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- META TAGS -->
		<meta charset="utf-8">
		<meta name="description" content="Ingredients Page for CT310 Project">
		<meta name="keywords" content="html, css, bootstrap, web devlopment, Justin Rentie, CSU,">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="icon" href="./Fork.ico">
		<title>The Ingredient Shop</title>
		<link rel="icon" type="image/gif/png" href="../assets/image/Fork.ico">
	</head>
	

	<body>

	<!-- JUMBOTRON -->
	<div class = "container">
		<div class="jumbotron">
				<h1>The Ingredients Shop</h1>
				<p> We specialize in ingredients</p>
	</div>
		</div>

	<!-- NAVBAR -->
	<!-- need to add links to other pages -->
		<div class = "container">
		<nav class="navbar navbar-custom">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- need to add link -->
					<a class="navbar-brand" href="../index.php">Shop Home</a>
				</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingredients<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<!-- need to add link -->
							<li><a href="../lib/ingredient.php?=Cardamom">Cardamom</a></li>
							<li><a href="../lib/ingredient.php?=Sorrel">Sorrel</a></li>
							<li><a href="../lib/ingredient.php?=Yams">Yam</a></li>
						</ul>
					</li>
					<!-- need to add link -->
					<li><a href="../lib/aboutus.php">About Us</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
                        <?php
                            if(!isset($_SESSION['isLoggedIn'])){
                            ?>
                                <li><a href="../lib/login.php" <span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <?php
                            }
                            ?>
                            <?php
                            if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true){
                            ?>
                                <li><a href="../lib/logout.php" <span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                            <?php 
                            }
                            ?>
                            <?php
                            if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == false){
                            ?>
                                <li><a href="../lib/login.php" <span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                            <?php 
                            }
                            ?>
                    
					</ul>
			</div>
			</div>
		</nav>
	</div>