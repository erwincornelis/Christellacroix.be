<?php

$error = 'Er is een onverwachtse fout opgetreden.';

if(!isset($_GET['p']) || $_GET['p'] == '') {
	echo $error;
	die();
}

switch($_GET['p']) {
	case 'startpagina':
		echo "startpagina";
		break;
	default:
		echo $error;
		break;
			
}

?>