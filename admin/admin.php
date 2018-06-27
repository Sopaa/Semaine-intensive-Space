<?php
/**
 * Created by PhpStorm.
 * User: sopaa
 * Date: 19/06/2018
 * Time: 14:54
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
;';
	$stmt    = $conn->prepare( $request );
	$stmt->execute();
	?>

    <a href="add.php">Want to add a Satelite?</a>

	<table cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<th>id</th>
			<th>name</th>
			<th>status</th>
		</tr>
		<?php
        while ( false !== $row = $stmt->fetch( PDO::FETCH_ASSOC ) ): ?>
			<tr>
				<td><?= $row['id'] ?></td>
				<td><a href="details.php?id=<?=$row['id']?>"><?= $row['name'] ?></a></td>
				<td><?= $row['status'] ?></td>
			</tr>
		<?php endwhile;

?>
	</table>
	<?php
}