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

require_once '../includes/users.php';

user_sign_out();

header('Location: sign-in.php');