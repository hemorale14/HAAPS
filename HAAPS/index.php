<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/HAAPS/HAAPS.Soft-Telecom-Tecnología.html');
	exit;
?>
Imposible localizar la página solicitada, intentarlo más tarde. :-(
