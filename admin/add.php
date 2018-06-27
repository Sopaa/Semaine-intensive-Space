<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 22/06/2018
 * Time: 11:01
 */

session_start();
if(isset($_SESSION['logged'])){
	?>

	<!doctype html>
	<html lang="en">
	<head>
		<title>Add</title>
	</head>
	<body>

		<a href="admin.php">retour a l'index </a>

			<h1> Ajouter un Satelite </h1>

			<!-- On remplit notre form avec les valeurs des éléments de la db puis on les renvoit en POST -->
			<form action="doadd.php" method="post" enctype="multipart/form-data">
					<input  placeholder="Nom" type="text" name="name" >
					<label for="">Jour de lancement : </label><input  placeholder="Jour de lancement" type="date" name="launch_date" >
					<label for="">Jour de fin de mission : </label><input placeholder="fin de mission prévue?" type="date" name="mission_end_date"  >
					<input  placeholder="status" type="text" name="status" >
					<input  placeholder="Programme" type="text" name="program" >
					<input  placeholder="agence(s)" type="text" name="agencie" >
					<input  placeholder="orbite" type="text" name="orbit" >
					<input  placeholder="atlitude" type="number" name="altitude" min="0" >
					<input  placeholder="inclinaison" type="text" name="inclinaison" >
					<input  placeholder="img" type="file" name="img" accept="image/*" >
					<input  placeholder="description" name="description" >
					<input  placeholder="apoaxis" name="apoaxis" >
					<input  placeholder="periaxis" name="periaxis" >
					<input  placeholder="duration" name="duration" >
					<input  placeholder="surname" name="surname" >
					<input  placeholder="launch_site" name="launch_site" >
				<input class="submitInput" type="submit" value="Ajouter">
			</form>
	</body>
	</html>

<?php } else { echo "Votre session a expirée"; } ?>