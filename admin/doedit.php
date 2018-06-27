<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 22/06/2018
 * Time: 17:48
 */


session_start();
if(isset($_SESSION['logged'])) {
	require_once "../include/connexion.php";

	$request = "UPDATE 
  `Satelite` 
SET 
  `name` = :name, 
  `launch_date` = :launch_date,
  `mission_end_date` = :mission_end_date, 
  `status` = :status, 
  `program` = :program, 
  `agencie` = :agencie, 
  `orbit` = :orbit, 
  `altitude` = :altitude,
  `inclinaison` = :inclinaison,
  `img` = :img,
  `description` = :description,
  `apoaxis` = :apoaxis,
  `periaxis` = :periaxis,
  `duration` = :duration,
  `surname` = :surname,
  `launch_site` = :launch_site
WHERE 
	id = :id
;";

	$uploadfile = '../ressources/img/'.$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);

	$stmt = $conn->prepare($request);
	$stmt->bindValue(':name', htmlentities($_POST['name']));
	$stmt->bindValue(':launch_date', htmlentities($_POST['launch_date']));
	$stmt->bindValue(':mission_end_date', htmlentities($_POST['mission_end_date']));
	$stmt->bindValue(':status', htmlentities($_POST['status']));
	$stmt->bindValue(':program', htmlentities($_POST['program']));
	$stmt->bindValue(':agencie', htmlentities($_POST['agencie']));
	$stmt->bindValue(':orbit', htmlentities($_POST['orbit']));
	$stmt->bindValue(':altitude', htmlentities($_POST['altitude']));
	$stmt->bindValue(':inclinaison', htmlentities($_POST['inclinaison']));
	$stmt->bindValue(':img', htmlentities($_FILES['img']['name']));
	$stmt->bindValue(':description', htmlentities($_POST['description']));
	$stmt->bindValue(':apoaxis', htmlentities($_POST['apoaxis']));
	$stmt->bindValue(':periaxis', htmlentities($_POST['periaxis']));
	$stmt->bindValue(':duration', htmlentities($_POST['duration']));
	$stmt->bindValue(':surname', htmlentities($_POST['surname']));
	$stmt->bindValue(':launch_site', htmlentities($_POST['launch_site']));
	$stmt->bindValue(':id', $_POST['id']);
	$stmt->execute();
	header('Location: details.php?id='.$_POST['id']);

}



else {
	echo "Votre session a expirée.";
}