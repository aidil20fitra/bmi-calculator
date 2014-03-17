<?php
#########
#
#	This will return the report from database if anyone needs it.
#
#########

require_once(dirname(__FILE__) . '/bmi.class.php');

getData();
$url = 'http://' . $_SERVER['HTTP_HOST'];            
$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$url .= '/daftar.csv';
header('Location: ' . $url, true, 302);
?>