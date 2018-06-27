<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 19/06/2018
 * Time: 14:05
 */
session_start();
require_once "../include/connexion.php";
if (true) {
	if (!empty($_POST['username']) || !empty($_POST['password'])) {
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
//Check if input is not empty
		if (!empty($username) && !empty($password)) {
//Get mail and password from db
			$requete = "SELECT
`username`,
`password`
FROM
`admin`
WHERE
`username` = :username AND
`password` = :password
;";
			$stmt = $conn->prepare($requete);
			$stmt->bindParam(':username', $username);
			$stmt->bindParam(':password', $password);
			$stmt->execute();
			$user = $stmt->fetch();
			$_SESSION['logged'] = 'true';
			if ($user) {
				header('location: admin.php');
			}
		}
	}
}

?>
<h1>Connexion Admin </h1>


        <form class="" action="" method="post">
            <div>
                <input type="text" name="username" value="" placeholder="Votre Nom d'utilisateur">
                <input type="password" name="password" value="" placeholder="Votre mot de passe">
                <input type="submit" name="submit" value="Se Connecter">
            </div>
        </form>