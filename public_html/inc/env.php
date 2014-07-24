<?php
	// filename
	$filename = basename($_SERVER['PHP_SELF'],".php");
	$directory = '/' . basename(dirname($_SERVER['PHP_SELF']));

	// domain
	//$domain_name = 'http://www.design2html.org/';

	// Preparing the base href string as it needs the hostname for clarification
	$basehref =
		'http' . (!isset($_SERVER['HTTPS']) ? null : 's' ) . '://'
		. $_SERVER['HTTP_HOST']
		. strtr(dirname($_SERVER['SCRIPT_FILENAME']), array($_SERVER['DOCUMENT_ROOT'] => ''))
		. '/';
	//var_dump($_SERVER); die();
	/**#@-*/

	// project name
	$project_name = 'Boilerplate Prototype Template';
