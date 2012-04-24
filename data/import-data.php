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

require_once '../includes/db.php';

$places_xml = simplexml_load_file('volleyball_courts.kml');

$sql = $db->prepare('
	INSERT INTO ottawamapped (name, latitude, longitude, address)
	VALUES (:name, :latitude, :longitude, :address)
');

foreach ($places_xml->Document->Folder[0]->Placemark as $place) {
	$coords = explode(',', trim($place->Point->coordinates));
	$adr = '';

	foreach ($place->ExtendedData->SchemaData->SimpleData as $civic) {
		if ($civic->attributes()->name == 'LEGAL_ADDR') {
			$adr = $civic;
		}
	}

	$sql->bindValue(':name', $place->name, PDO::PARAM_STR);
	$sql->bindValue(':adr', $adr, PDO::PARAM_STR);
	$sql->bindValue(':lng', $coords[0], PDO::PARAM_STR);
	$sql->bindValue(':lat', $coords[1], PDO::PARAM_STR);
	$sql->execute();
}

var_dump($sql->errorInfo());
