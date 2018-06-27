<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 22/06/2018
 * Time: 14:45
 */

session_start();
if(isset($_SESSION['logged'])) {
	require_once "../include/connexion.php";
	/* Request */
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
WHERE
`id` = :id
;';
	$stmt    = $conn->prepare( $request );
	$stmt->bindValue( ':id', $_GET['id'] );
	$stmt->execute();
	$row = $stmt->fetch( PDO::FETCH_ASSOC );
	?>


	<html xmlns="http://www.w3.org/1999/html">

	<head>

		<title><?= $row['name'] ?></title>
	</head>

	<body>

	<p><a href="admin.php">retour a la liste</a></p>

	<p><label for="">name : </label><?= $row['name'] ?></p>
	<p><label for="">Lancement : </label><?= $row['launch_date'] ?></p>
	<p><label for="">Fin de la mission : </label><?= $row['mission_end_date'] ?></p>
	<p><label for="">Statut : </label><?= $row['status'] ?></p>
	<p><label for="">Programme : </label><?= $row['program'] ?></p>
	<p><label for="">Agence(s) : </label><?= $row['agencie'] ?></p>
	<p><label for="">Type d'orbite : </label><?= $row['orbit'] ?></p>
	<p><label for="">Altitude : </label><?= $row['altitude'] ?> km</p>
	<p><label for="">Inclinaison : </label><?= $row['inclinaison'] ?></p>
	<p><label for="">descritpion : </label><?= $row['description'] ?></p>
	<p><label for="">image : </label></p> <img src="../ressources/img/<?= $row['img'] ?>" alt="<?= $row['name'] ?>">


	<h3><a href="edit.php?id=<?= $row['id'] ?>">Modifier</a></h3>
	<h3><a href="delete.php?id=<?= $row['id']?>">Supprimer</a></h3>

	</body>

	</html>
	<?php
} else { echo "votre session a expirée";}