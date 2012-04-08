<?php

require_once 'includes/filter-wrapper.php';

$errors = array();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
	header('Location index.php');
	exit;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$latitude = filter_input(INPUT_POST, 'latitude', FILTER_SANITIZE_STRING);
$longitude = filter_input(INPUT_POST, 'longitude', FILTER_SANITIZE_STRING);
$address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);

if  ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (empty($name)) {
		$errors['name'] = true;
	}
	if(empty($latitude)) {
		$errors['latitude'] = true;
	}
	
	if(empty($longitude)) {
		$errors['longitude'] = true;
	}
	
	if(empty($address)) {
		$errors['address'] = true;
	}
	
	if (empty($errors)) {
		require_once 'includes/db.php'; 
	
		
		$sql = $db->prepare('
			INSERT INTO ottawamapped (name, latitude, longitude, address)
			VALUES (:name, :latitude, :longitude, :address)
		');
		 $sql->bindValue(':name', $name, PDO::PARAM_STR);
		 $sql->bindValue(':latitude', $latitude, PDO::PARAM_STR);
		 $sql->bindValue(':longitude', $longitude, PDO::PARAM_STR);
		 $sql->bindValue(':address', $street_address, PDO::PARAM_STR);
		 $sql->bindValue(':id', $id, PDO::PARAM_STR);
		 $sql->execute();
		 
	header('Location index.php');
	exit;
}
	


} else {
	require_once 'includes/db.php';
	$sql = $db->prepare('
	SELECT id, name, latitude, longitude, address
	FROM ottawamapped
	WHERE id = :id
	');
	
	$sql->bindValue(':id', $id, PDO::PARAM_INT);
	$sql->execute();
	$results =$sql->fetch();
	
	$name = $results['name'];
	$latitude = $results['latitude'];
	$longitude = $results['longitude'];
	$street_address = $results['address'];
}


?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Add a Volleyball Court</title>
</head>

<body>


	<form method="post" action="edit.php?id=<?php echo $id; ?>">
    	</div>
        	<label for="name">Name<?php if (isset($errors['name'])): ?> <strong> is required </strong> <?php endif; ?> </label>
            <input id="name" name="name" value="<?php echo $name; ?>" >
        </div>
        
       </div>
        	<label for="latitude">Latitude<?php if (isset($errors['latitude'])): ?> <strong> is required </strong> <?php endif; ?> </label>
            <input id="latitude" name="latitude" value="<?php echo $latitude; ?>" >
        </div>
		
		</div>
        	<label for="longitude">Longitude<?php if (isset($errors['longitude'])): ?> <strong> is required </strong> <?php endif; ?> </label>
            <input id="longitude" name="longitude" value="<?php echo $longitude; ?>" >
        </div>
		
		</div>
        	<label for="address">Street Address<?php if (isset($errors['address'])): ?> <strong> is required </strong> <?php endif; ?> </label>
            <input id="address" name="address" value="<?php echo $address; ?>" >
        </div>
       
       <button type="submit"> Add</button>
     </form>           	






</body>
</html>