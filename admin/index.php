<?php

require_once 'includes/filter-wrapper.php';

// `->exec()` allows us to perform SQL and NOT expect results
// `->query()` allows us to perform SQL and expect results
require_once 'includes/db.php'; 
$results = $db->query('
	SELECT id,name,latitude,longitude,address
	FROM ottawamapped
	ORDER BY name ASC
');
?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Ottawa Mapped</title>
</head>
<body>

<a href="add.php"> Add a Volleyball Court</a>
	
	<ul>
	<?php
	/*
		foreach ($results as $ottawamapped) {
			echo '<li>' . $ottawamapped['name'] . '</li>';
		}
	*/
	?>
	
	<?php foreach ($results as $ottawamapped) : ?>
		<li>
			<a href="single.php?id=<?php echo $ottawamapped['id']; ?>"><?php echo $ottawamapped['name']; ?></a>
			&bull;
			<a href="edit.php?id=<?php echo $ottawamapped['id']; ?>">Edit</a>
            <a href="delete.php?id=<?php echo $ottawamapped['id']; ?>">Delete</a>
		</li>
	<?php endforeach; ?>
	</ul>
	
</body>
</html>