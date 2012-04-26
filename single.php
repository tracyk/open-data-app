<?php

/**
	*Ottawa Mapped
	*Displays the list and map for the Open Data Set
	*
	*@package ca.tracyk.opp-data-app
	*@copyright 2012 Tracy K. Designs
	*@author Tracy Karnabi <tracy@tracykarnabi.com>
	*@link https://github.com/tracyk/open-data-app
	*license New BSD License 
 */
	
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
	header('Location: index.php');
	exit;
}

require_once 'includes/db.php';

$sql = $db->prepare('
	SELECT id, name, latitude, longitude, address
	FROM ottawamapped
	WHERE id = :id
');

$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$results = $sql->fetch();

if (empty($results)) {
	header('Location: index.php');
	exit;
}

$title = $results['name'];

include 'includes/theme-top.php';

?>

<div id="container">
		<div class="single-page">
				<h1><?php echo $results['name']; ?></h1>
				<dl>
						<dt>Address</dt>
						<dd><?php echo $results['address']; ?></dd>
						<dt>Longitude</dt>
						<dd><?php echo $results['longitude']; ?></dd>
						<dt>Latitude</dt>
						<dd><?php echo $results['latitude']; ?></dd>
				</dl>
				<div class="exemple">
						<div class="basic" id="12_1"></div>
				</div>
		</div>
		<a href="index.php" class="admin home-class">Home</a> 
		<a href="admin/index.php" class="admin admin-class-button">Admin</a> </div>
<?php

include 'includes/theme-bottom.php';

?>
