<?php

$method = $_SERVER['REQUEST_METHOD'];



if ( isset($_SERVER["PATH_INFO"])) {

	$path = $_SERVER['PATH_INFO'];	
		
	}
		else {
			$path = "/";
		}

$formatPath = trim($path, '/');

$arrayPath = explode('/',$formatPath);

$appRoot = __DIR__;

include $appRoot.$arrayPath[1].'.html';
echo $appRoot;

?>