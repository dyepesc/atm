<?php

// define all your database things

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "atm");
define("DB_PORT", 3306);
// define all your error logging things
define('LOGFILE', 'log/error_log.txt');
ini_set("log_errors", TRUE);
ini_set('error_log', LOGFILE);
// Define configuration make sure to put the correct database name
