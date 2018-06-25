<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 19/06/2018
 * Time: 13:01
 */
try {
	$conn = new PDO('mysql:host=localhost;dbname=semaine_projet', 'root', 'root');
} catch(PDOException $exception) {
	die($exception -> getMessage());
}
