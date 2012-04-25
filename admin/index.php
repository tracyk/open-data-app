<?php

	require_once '../includes/users.php';

	if (!user_is_signed_in()) {
		header('Location: sign-in.php');
		exit;	
	}

	require_once '../includes/db.php';

	$results = $db->query('
	SELECT id,name,latitude,longitude,address
	FROM ottawamapped
	ORDER BY name ASC
');

include '../includes/theme-top.php';

?>

	<p class="sign-out"><a href="sign-out.php">Sign Out</a></p>
	<a href="add.php"> Add a Volleyball Court</a>
	
	<div id="container">
		<div class="wrapper">
			<ol>
				<?php foreach ($results as $volley) : ?>
					<li itemscope itemtype="http://schema.org/TouristAttraction"> <a href="../single.php?id=<?php echo $volley['id']; ?>" itemprop="name"><?php echo $volley['name']; ?></a> <span itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
							<meta itemprop="latitude" content="<?php echo $volley['latitude']; ?>">
							<meta itemprop="longitude" content="<?php echo $volley['longitude']; ?>">
							</span>
							<p><a href="edit.php?id=<?php echo $volley['id']; ?>">Edit</a></p>
							<p><a href="delete.php?id=<?php echo $volley['id']; ?>">Delete</a></p>
							<p><a href="add.php?id=<?php echo $volley['id']; ?>">Add</a></p>
					</li>
					<?php endforeach; ?>
			</ol>
		</div>	
	</div>	
		
<?php

include '../includes/theme-bottom.php';

?>