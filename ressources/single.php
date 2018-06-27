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
    <link rel="stylesheet" type="text/css" href="css/style-single.css">
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
        <div class="header-breadcrumb"><a href="#" class="header-breadcrumb-link">Accueil</a> > <a href="#" class="header-breadcrumb-link">Satellites</a>  >  <a href="#" class="header-breadcrumb-link">Tous les satellites</a>  >  <a href="#" class="header-breadcrumb-link">Spoutnik 1</a></div>
    </header>


    <section class="informations">
    	<div class="informations-title">SPOUTNIK 1</div>
    	<div class="informations-">
    		<p class="informations-paragraph"><span class="informations-bold">Organisation:</span> Union soviétique</p>
    		<p class="informations-paragraph"><span class="informations-bold">Statut:</span> Mission achevée</p>
    		<p class="informations-paragraph"><span class="informations-bold">Autres noms:</span> PS-1</p>
    		<p class="informations-paragraph"><span class="informations-bold">Lancement:</span> 4 octobre 1957</p>
    		<p class="informations-paragraph"><span class="informations-bold">Durée:</span> 92 jours</p>
    		<p class="informations-paragraph"><span class="informations-bold">Fin de mission:</span> 26 octobre 1957</p>
    		<p class="informations-paragraph"><span class="informations-bold">Site:</span> Baïkonour</p>
    		<p class="informations-paragraph"><span class="informations-bold">Orbite:</span> Basse</p>
    		<p class="informations-paragraph"><span class="informations-bold">Périgée:</span> 227km</p>
    		<p class="informations-paragraph"><span class="informations-bold">Apogée:</span> 945km</p>
    		<p class="informations-paragraph"><span class="informations-bold">Inclinaison:</span> 65,1°</p>
    	</div>
    </section>

    <div class="whiteCircle-container">
    	<div class="whiteCircle"></div>
    </div>

    <img src="img/ikonos.png" class="informations-image">
    
</body>
</html>