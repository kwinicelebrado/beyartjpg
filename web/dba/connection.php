<?php

define('db_host', 'localhost');
define('db_username', 'id16105420_harthart');
define('db_password', '@rt15layFh4rtu');
define('db_name', 'id16105420_beyartjpg');
define('db_port', 3307);

$conn = mysqli_connect(db_host, db_username, db_password, db_name, db_port);

if ($conn->connect_error) {
	die('Database connection error: ' . $conn->connect_error);
}