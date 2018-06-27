<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 22/06/2018
 * Time: 16:06
 */

session_start();
if(isset($_SESSION['logged'])) {
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


<h1>Voulez vous vraiment supprimer "<?= $row['name']?>"?</h1>

	<a href="dodelete.php?id=<?=$row['id']?>">Oui</a>
	<a href="details.php?id=<?$row['id']?>">Non</a>


<?php

}
else {
	echo "Votre session a expirée";
}