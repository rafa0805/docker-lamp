<?php
// phpinfo();
define('DNS', 'mysql:dbname=test;host=db');
define('USER', 'root');
define('PW', 'applepen0805');
$db = new PDO(DNS, USER, PW);

var_dump($db);