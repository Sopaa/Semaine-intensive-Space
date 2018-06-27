<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 22/06/2018
 * Time: 11:19
 */

session_start();
if(isset($_SESSION['logged'])){
	require_once "../include/connexion.php";

	$request = "INSERT INTO
	`Satelite` 
	(
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
	)
VALUES 
	(
		:name, 
		:launch_date, 
		:mission_end_date, 
		:status, 
		:program, 
		:agencie, 
		:orbit, 
		:altitude, 
		:inclinaison, 
		:img, 
		:description,
		:apoaxis,
		:periaxis,
		:duration,
		:surname,
		:launch_site

	) 
;";
	if (file_exists($_FILES['img']['name'])) {

	}else{
	$uploadfile = '../ressources/img/'.$_FILES['img']['name'];
	move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
	}
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
	$stmt->execute();
	/* Back to index page */
	header('Location: admin.php');
} else { echo "votre session a expirée";}