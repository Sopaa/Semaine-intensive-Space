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
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style-don.css">
</head>
<body>
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
        </div>
        <div class="header-breadcrumb"><a href="#" class="header-breadcrumb-link">Accueil</a> > <a href="#" class="header-breadcrumb-link">Dons</a>  
    </header>

	<section class="don-section">
		<div class="don-title-container">
			 <div class="don-title">DONS</div>
			 <div class="whiteLine"></div>
		</div>
		<div class="don-content">
			<div class="don-content-text">
				<span class="don-content-text-title">SHIP CLEANING</span><span> Project</span>
				<p class="don-content-text-paragraph">Envoi d'une fusée permettant de nettoyer notre planète en son extérieur.</p>
				<div class="stat-container">
					<div class="progression-bar">0 %</div>
					<p class="stat-container-paragraph">€ 0 EURO</p>
					<p class="stat-container-paragraph space-before">0 donateur</p>
					<p class="stat-container-paragraph space-before">0% sur €1,000,000</p>
				</div>
				<div class="submit-button">SOUTENIR</div>
			</div>
			<img src="img/rocket.png" class="don-image">
		</div>
	</section>
	

   
