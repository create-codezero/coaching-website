<?php
/*  define('DB_SERVER', 'sql305.epizy.com');
define('DB_USERNAME', 'epiz_24052283');
define('DB_PASSWORD', 'V3t4NCRXbSy7');
define('DB_NAME', 'epiz_24052283_code2hack');

*/

define('DB_SERVER', 'server');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'db_name');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


// Check connection
if ($link === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
}
