<?php
use lithium\data\Connections;

// mongodb
Connections::add('default', [
    'type' => 'MongoDb',
    'host' => 'localhost',
    'database' => 'my_app'
]);

// mysql
Connections::add('relational', [
	'type' => 'database',
	'adapter' => 'MySql',
	'host' => 'localhost',
	'login' => 'db_user',
	'password' => 'password',
	'database' => 'my_app',
]);

// multiple environments
Connections::add('default', [
    'test' => [
        'type' => 'MongoDb',
        'database' => 'app_test',
        'host' => 'localhost',
    ],
    'development' => [
        'type' => 'MongoDb',
        'database' => 'app_dev',
        'host' => 'localhost',
    ]
]);

?>
