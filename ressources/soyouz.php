<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 19/06/2018
 * Time: 13:51
 */
require_once "../include/connexion.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>6ROCKET9</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body background="img/bgGalaxy.png">
    <header class="header">
        <div class="header-top">
            <div class="header-logo">
							<svg id="logo" viewBox="0 0 160 160" width="100" height="100">
						  	<circle cx="80" cy="80" r="45" fill="#FFF"/>
						  		<g transform=" matrix(0.866, -0.5, 0.25, 0.433, 80, 80)">
						    		<path d="M 0,70 A 65,70 0 0,0 65,0 5,5 0 0,1 75,0 75,70 0 0,1 0,70Z" fill="#FFF">
						     	<animateTransform attributeName="transform" type="rotate" from="360 0 0" to="0 0 0" dur="3s" repeatCount="indefinite" />
						    </path>
						  	</g>
							</svg>
            </div>
            <div class="connexion">
              <span class="connexion-text">Connexion</span>
              <div class="connexion-line"></div>
            </div>
        </div>
        <div class="greyLine"></div>
    </header>
		<section class="ship">
			<h1 class="name">S O Y O U Z</h1>
		</section>
		<div class="middleShip">
			<img src="img/soyouz.png" alt="SOYOUZ" class="imgShip">
		</div>
    <div class="whiteHalfCircle"></div>
		<div class="buttonMore">
			<a type="button" name="button" class="moreInfo">EN SAVOIR PLUS</a>
		</div>
		<div class="yellowLineBox">
			<div class="yellowLine"></div>
		</div>
		<h2 class="seeAll">Voir tout</h2>
		<section class="footer">
			<div class="greyTouch1"></div>
			<div class="greyTouch2"></div>
			<div class="greyTouch3"></div>
		</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="scripts/carousel.js"></script>

</body>
</html>
