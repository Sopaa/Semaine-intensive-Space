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
`description`
FROM
  `Satelite`
;';
$stmt    = $conn->prepare( $request );
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style-all.css">
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
        <div class="header-breadcrumb"><a href="index.php" class="header-breadcrumb-link">Accueil</a> >  <a href="#" class="header-breadcrumb-link">Tous les satellites</a>
    </header>

    <div class="all">
	    <?php
	    while ( false !== $row = $stmt->fetch( PDO::FETCH_ASSOC ) ): ?>
    	<div class="one">
    		<img src="img/<?=$row['img']?>" class="one-image">
    		<div class="one-title">
    			<p><?=$row['name']?></p>
    			<div class="one-greyLine"></div>
    		</div>
    		<div class="one-learn-more"><a class="all_more" href="single.php?id=<?=$row['id']?>">En savoir plus</a></div>
    	</div>
	    <?php endwhile;

	    ?>
    </div>