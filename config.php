<?php
$path = $_SERVER['DOCUMENT_ROOT']."/katchup-config-port.txt";
$port = "";
if (file_exists($path))
{
	$port = file_get_contents($path);
}

define('PORT', $port);
define('ITQ_BASE_URL', 'http://'.$_SERVER['SERVER_NAME'].PORT.'/katchup/');
?>