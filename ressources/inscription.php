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
    <link rel="stylesheet" type="text/css" href="css/connexion.css">
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
        <div class="header-breadcrumb"><a href="#" class="header-breadcrumb-link">Accueil</a> > <a href="#" class="header-breadcrumb-link">Connexion</a>  
    </header>
	

	<section class="form-container">
		<div class="title">CONNEXION</div>
		<form>
			<p><input type="text" name="mail" placeholder="Adresse mail" class="form-mail"></p>
			<p><input type="text" name="password" placeholder="Nom d'utilisateur" class="form-password"></p>
			<p><input type="text" name="password" placeholder="Mot de passe" class="form-password"></p>
			<p><input type="submit" name="submit" value="Se connecter" class="form-submit"></p>	
		</form>
		<div class="link-container">
			<a href="#" class="bottom-link">Retour à la connexion</a>
		</div>
		
	</section>

	