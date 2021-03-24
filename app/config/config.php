<?php

$config = parse_ini_file('config.ini');

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', $config['DB_PASS']);
define('DB_NAME', 'tvmc');

// App Root 
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
define('URLROOT', 'http://localhost:8000');

// Site Name
define('SITENAME', 'TraversyMVC');