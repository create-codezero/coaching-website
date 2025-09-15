<?php
/*  define('DB_SERVER', 'sql305.epizy.com');
define('DB_USERNAME', 'epiz_24052283');
define('DB_PASSWORD', 'V3t4NCRXbSy7');
define('DB_NAME', 'epiz_24052283_code2hack');

*/

define('DB_SERVER', 'sql206.epizy.com');
define('DB_USERNAME', 'epiz_26366019');
define('DB_PASSWORD', 'IUWuQNnETd');
define('DB_NAME', 'epiz_26366019_code2hack');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


// Check connection
if ($link === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
}
