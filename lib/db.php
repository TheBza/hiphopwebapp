<?php

// databse connection and schema constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_SCHEMA', 'login_tutorial');
define('DB_TBL_PREFIX', 'KV_');

//establish a connection to database
if(!$GLOBALS['DB'] = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD)){
	die('Error: Unable to connect to the database');
}
if (!mysql_select_db(DB_SCHEMA, $GLOBALS['DB'])){
	mysql_close($GLOBALS['DB']);
	die('Error: Unable to select database schema');


}



?>