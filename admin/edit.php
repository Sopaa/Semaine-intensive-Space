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

	<p><?=$row['id']?> -- <?=$row['name']?></p>
	<form action="doedit.php" method="post" enctype="multipart/form-data">
		<input type="hidden" value="<?=$_GET['id']?>" name="id">
		<input  value="<?=$row['name']?>" type="text" name="name" >
		<label for="">Jour de lancement : </label><input  value="<?=$row['launch_date']?>" type="date" name="launch_date" >
		<label for="">Jour de fin de mission : </label><input value="<?=$row['mission_end_date']?>" type="date" name="mission_end_date"  >
		<input  value="<?=$row['status']?>" type="text" name="status" >
		<input  value="<?=$row['program']?>" type="text" name="program" >
		<input  value="<?=$row['agencie']?>" type="text" name="agencie" >
		<input  value="<?=$row['orbit']?>" type="text" name="orbit" >
		<input  value="<?=$row['altitude']?>" type="number" name="altitude" >
		<input  value="<?=$row['inclinaison']?>" type="text" name="inclinaison" >
		<input  value="<?=$row['img']?>" type="text" name="img" >
		<input  value="<?=$row['description']?>" type="text" name="description" >
		<input class="submitInput" type="submit" value="modifier">
	</form>




<?php
} else { echo "votre session a expirée";}