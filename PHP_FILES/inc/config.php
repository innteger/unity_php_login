<?php
ini_set('memory_limit', '512M');

ini_set('display_errors',1);
date_default_timezone_set('Europe/Istanbul'); 

$conf = array (
'dbhost'		=> 'localhost', 
'dbname'		=> 'DB_NAME',	
'dbuser'		=> 'DB_USER',	
'dbpass'		=> 'DB_PASSWORD',
);

define("ROOT_PATH", dirname(dirname(__FILE__))."/");

error_reporting(E_ERROR | E_PARSE | E_COMPILE_ERROR);
?>