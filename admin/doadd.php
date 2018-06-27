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
(`name`, `launch_date`, `mission_end_date`, `status`, `program`, `agencie`, `orbit`, `altitude`,`inclinaison`, `img`, `description`)
VALUES 
(:name, :launch_date, :mission_end_date, :status, :program, :agencie, :orbit, :altitude, :inclinaison, :img, :description) 
;";

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
	$stmt->bindValue(':img', htmlentities($_POST['img']));
	$stmt->bindValue(':description', htmlentities($_POST['description']));
	$stmt->execute();
	/* Back to index page */
	header('Location: admin.php');
} else { echo "votre session a expirée";}