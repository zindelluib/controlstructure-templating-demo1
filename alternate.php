<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alternate Syntax Demo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Demo</h1>
	<?php
		$users  = array(
			array(
				'id' => 1,
				'name' => 'John Doe',
				'username' => 'jdoe123',
				'email' => 'jdoe@ustp.edu.ph',
				'is_active' => true,
			),
			array(
				'id' => 2,
				'name' => 'Pedro Katigbak',
				'username' => 'peter_k',
				'email' => 'peterk@ustp.edu.ph',
				'is_active' => true,
			),
			array(
				'id' => 3,
				'name' => 'Nikita Ivanovic',
				'username' => 'nikita',
				'email' => 'ivanovic_nikita@ustp.edu.ph',
				'is_active' => false,
			)

		);
	?>

	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Active</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users as $user): ?>
			<tr>
				<td><?php echo $user['id'];?></td>
				<td><?php echo $user['name'];?></td>
				<td><?php echo $user['username'];?></td>
				<td><?php echo $user['email'];?></td>
				<?php if($user['is_active']): ?>
				<td>Yes</td>
				<?php else: ?>
				<td>No</td>
				<?php endif;?>

			</tr>
			<?php endforeach; ?>
		</tbody>

	</table>

</body>
</html>