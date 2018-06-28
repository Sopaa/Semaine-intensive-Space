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
        <div class="header-breadcrumb"><a href="#" class="header-breadcrumb-link">Accueil</a> > <a href="#" class="header-breadcrumb-link">Satellites</a>  >  <a href="#" class="header-breadcrumb-link">Tous les satellites</a>  >  <a href="#" class="header-breadcrumb-link">Explorer 1</a></div>
    </header>

    <section class="descriptive-container">
    	<div class="descriptive-title">EXPLORER 1</div>
		<p class="descriptive-paragraph">C'est le <span class="descriptive-orange">4 octobre 1957</span> que l'URSS démarre la course spatiale en envoyant Spoutnik-1 en orbite, le premier satellite artificiel de l'histoire.</p>
		<p class="descriptive-paragraph">Créé par l'ingénieur Segueï Pavlovitch Korolev, Spoutnik-1 a la forme d'une sphère de 58 cm de diamètre pour un poids de 43,6 kilos.
		</p>
		<p class="descriptive-paragraph">Ce satellite devient donc le premier objet artificiel lancé dans l'espace.</p>
		<p class="descriptive-paragraph">Son but : au-delà de servir la propagande soviétique, il transmet pendant 22 jours des indications sur les vents solaires, le champ magnétique terrestre, les rayons cosmiques, etc.</p>
		<p class="descriptive-paragraph">Ce sont les premières données scientifiques relevées directement depuis l'espace.</p>
		<p class="descriptive-paragraph">Mais l'URSS ne s'arrête pas là puisqu'elle envoie le premier être vivant en orbite, la chienne Laïka, le <span class="descriptive-orange">3 novembre 1957</span>, à bord de Spoutnik-2.</p>
		<p class="descriptive-paragraph">Quant à Spoutnik-1, il est désorbité le <span class="descriptive-orange">4 janvier 1958</span>.</p>
		<p class="descriptive-paragraph">Les Etats-Unis mettent 4 mois à réagir en envoyant leur propre satellite, <span class="descriptive-orange">Explorer 1</span>, le premier février 1958, depuis la fameuse base de Cap Canaveral.</p>
		<p class="descriptive-paragraph">Dans la course à l'espace désormais lancée, Nikita Khrouchtchev, alors premier secrétaire du Parti communiste russe, garde sa longueur d'avance sur Harry S.</p>
    </section>

    <div class="arrowCircle" id="myBtn">
    	<img src="img/up-arrow.svg" class="arrow">
    </div>

	
    <script type="text/javascript" src="scripts/scrolltotop.js"></script>

</body>