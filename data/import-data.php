<?php

require_once '../includes/db.php';

$places_xml = simplexml_load_file('volleyball_courts.kml');

$sql =$db->prepare('
	INSERT INTO ottawamapped (name, latitude, longitude)
	VALUES (:name, :latitude, :longitude)
');

foreach ($places_xml->Document->Folder[0]->Placemark as $place) {
	echo$place->name;
	$coords =explode(',',trim($place->Point->coordinates));
	//$adr = '';
	
	//foreach($place->ExtendedData->SchemaData->SimpleData as $civic) {
		//if ($civic->attributes()->name =='Legal_ADDR') {
			//$adr = $civic;
		//}
	//}
	
	//echo $adr;

	$sql->bindValue(':name', $place->name, PDO::PARAM_STR);
	$sql->bindValue(':latitude', $coords[0], PDO::PARAM_STR);
	$sql->bindValue(':longitude', $coords[1], PDO::PARAM_STR);
	$sql->execute();
}

var_dump($sql->errorInfo());


