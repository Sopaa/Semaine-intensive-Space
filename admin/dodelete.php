<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 22/06/2018
 * Time: 18:08
 */

session_start();
if(isset($_SESSION['logged'])) {


require_once "../include/connexion.php";
$request = "DELETE FROM 
`Satelite` 
WHERE 
id = :id";
	$stmt    = $conn->prepare( $request );
	$stmt->bindValue( ':id', $_GET['id'] );
	$stmt->execute();
	$row = $stmt->fetch( PDO::FETCH_ASSOC );
	//for deleting image from the img folder (not working for now)
	//$img_url = '../ressources/img/';
	//unlink($img_url . $row['img']);
	

$stmt = $conn->prepare($request);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
header('Location: admin.php');
} else {
	echo "Votre session a expirée";
}