<?php

return [
	'database' => [
		'name' => 'restapi',
		'username' => 'root',
		'password' => 'root',
		'connection' => 'localhost',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];
