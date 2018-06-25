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
	/* Select all the elements from the db table meat */
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
`inclinaison`
FROM
  `Satelite`
;';
	$stmt    = $conn->prepare( $request );
	$stmt->execute();
	?>

	<table cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<th>id</th>
			<th>status</th>
			<th>launch date</th>
			<th>mission end</th>
			<th>status</th>
			<th>programm</th>
			<th>agencie(s)</th>
			<th>orbit</th>
			<th>altitude</th>
			<th>inclinaison</th>
		</tr>
		<?php while ( false !== $row = $stmt->fetch( PDO::FETCH_ASSOC ) ): ?>
			<tr>
				<td><?= $row['id'] ?></td>
				<td><?= $row['name'] ?></a></td>
				<td><?= $row['launch_date'] ?></td>
				<td><?= $row['mission_end_date'] ?></td>
				<td><?= $row['status'] ?></td>
				<td><?= $row['program'] ?></td>
				<td><?= $row['agencie'] ?></td>
				<td><?= $row['orbit'] ?></td>
				<td><?= $row['altitude'] ?> km</td>
				<td><?= $row['inclinaison'] ?> °</td>
				<td></td>
			</tr>
		<?php endwhile; ?>
	</table>
	<?php
}