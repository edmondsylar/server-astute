<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
//	'connectionString' => 'mysql:host=localhost;dbname=conkev_lists_v2',
//	'connectionString' => 'mysql:host=192.168.8.5;dbname=astute-server',
	'connectionString' => 'mysql:host=localhost;dbname=development_sdn',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
//	'username' => 'root',
//	'password' => 'root',
//	'password' => 'root.conkev',
//	'password' => 'r00t@am1',
	'charset' => 'utf8',
	
);
