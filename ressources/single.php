<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 19/06/2018
 * Time: 13:51
 */
require_once "../include/connexion.php";
$request = 'SELECT
`id`,
`name`,
`launch_date`,
`mission_end_date`,
`status`,
`program`,
`agencie`,
`orbit`,
`altitude`,
`inclinaison`,
`img`,
`description`,
`apoaxis`,
`periaxis`,
`duration`,
`surname`,
`launch_site`
FROM
  `Satelite`
WHERE
`id` = :id
;';
$stmt    = $conn->prepare( $request );
$stmt->bindValue( ':id', $_GET['id'] );
$stmt->execute();
$row = $stmt->fetch( PDO::FETCH_ASSOC );
?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$row['name']?></title>
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
        <div class="header-breadcrumb"><a href="index.php" class="header-breadcrumb-link">Accueil</a> >  <a href="all.php" class="header-breadcrumb-link">Tous les satellites</a>  >  <a href="#" class="header-breadcrumb-link"><?=$row['name']?></a></div>
    </header>


    <section class="informations">
    	<div class="informations-title"><?=$row['name']?></div>
    	<div class="informations-">
    		<p class="informations-paragraph"><span class="informations-bold">Organisation:</span> <?=$row['agencie']?></p>
    		<p class="informations-paragraph"><span class="informations-bold">Statut:</span> <?=$row['status']?></p>
    		<p class="informations-paragraph"><span class="informations-bold">Autres noms:</span> <?=$row['surname']?></p>
    		<p class="informations-paragraph"><span class="informations-bold">Lancement:</span> <?=$row['launch_date']?></p>
    		<p class="informations-paragraph"><span class="informations-bold">Durée:</span> <?=$row['duration']?> jours</p>
    		<p class="informations-paragraph"><span class="informations-bold">Fin de mission:</span> <?=$row['mission_end_date']?></p>
    		<p class="informations-paragraph"><span class="informations-bold">Site:</span> <?=$row['launch_site']?></p>
    		<p class="informations-paragraph"><span class="informations-bold">Orbite:</span> <?=$row['orbit']?></p>
    		<p class="informations-paragraph"><span class="informations-bold">Périgée:</span> <?=$row['periaxis']?> km</p>
    		<p class="informations-paragraph"><span class="informations-bold">Apogée:</span> <?=$row['apoaxis']?> km</p>
    		<p class="informations-paragraph"><span class="informations-bold">Inclinaison:</span> <?=$row['inclinaison']?>°</p>
    	</div>
    </section>

    <div class="whiteCircle-container">
    	<div class="whiteCircle"></div>
    </div>

    <img src="img/ikonos.png" class="informations-image">
    
</body>
</html>