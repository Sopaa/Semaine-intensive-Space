<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 22/06/2018
 * Time: 16:03
 */

session_start();
if(isset($_SESSION['logged'])){
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

	<p><?=$row['id']?> -- <?=$row['name']?></p>
	<form action="doedit.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?=$_GET['id']?>" name="id">
        <Label for="">Nom:<input value="<?=$row['name']?>" type="text" name="name" ></label>
		<label for="">Jour de lancement : <input value="<?=$row['launch_date']?>" type="date" name="launch_date" ></label>
		<label for="">Jour de fin de mission : <input value="<?=$row['mission_end_date']?>" type="date" name="mission_end_date"  ></label>
        <label for="">Statut : <input value="<?=$row['status']?>" type="text" name="status" ></label>
        <label for="">Programme : <input value="<?=$row['program']?>" type="text" name="program" ></label>
        <label for="">Agence : <input value="<?=$row['agencie']?>" type="text" name="agencie" ></label>
        <label for="">Type d'orbite : <input value="<?=$row['orbit']?>" type="text" name="orbit" ></label>
        <label for="">Altitude : <input value="<?=$row['altitude']?>" type="number" name="altitude" min="0" ></label>
        <label for="">Inclinaison : <input value="<?=$row['inclinaison']?>" type="text" name="inclinaison" ></label>
        <label for="">Image : <input value="<?=$row['img']?>" type="file" accept="image/*" name="img" ></label>
        <label for="">Descritpion : <input value="<?=$row['description']?>" type="text" name="description" ></label>
        <label for="">apogée : <input value="<?=$row['apoaxis']?>" type="number" name="apoaxis" min="0"></label>
        <label for="">périgée : <input value="<?=$row['periaxis']?>" type="number" name="periaxis" min="0" ></label>
        <label for="">durée : <input value="<?=$row['duration']?>" type="number" name="duration" min="0"></label>
        <label for="">autres noms : <input value="<?=$row['surname']?>" type="text" name="surname" ></label>
        <label for="">Site de lancement : <input value="<?=$row['launch_site']?>" type="text" name="launch_site" ></label>
		<input class="submitInput" type="submit" value="modifier">
	</form>




<?php
} else { echo "votre session a expirée";}