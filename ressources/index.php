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
              <a href="../admin" class="connexion-text">Connexion</a>
              <div class="connexion-line"></div>
            </div>
        </div>
        <div class="greyLine"></div>
    </header>

		<section class="ship">
			<h1 class="name">Discover some Satelite...</h1>
		</section>
             <a href="#" class="direction-left"><img src="img/arrow.png" class="arrow"></a>
            <a href="#" class="direction-right"><img src="img/arrow.png" class="arrow"></a>
		<section class="carousel">
			<div class="carousel-wrap">
            <?php
			while ( false !== $row = $stmt->fetch( PDO::FETCH_ASSOC ) ): ?>
                <a class="imgShip" href="details.php?id=<?=$row['id']?>"><img src="img/<?=$row['img']?>" alt="<?=$row['name']?>" class="imgShipImg"></a>
            <?php endwhile; ?>
            </div>
		</section>

	<div class="yellowLineBox">
		<div class="yellowLine"></div>
	</div>
	<a href="#"><h2 class="seeAll">Voir tout</h2></a>
<div class="whiteHalfCircle"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="scripts/carousel.js"></script>

</body>
</html>

