<?php

session_start();
define("BaseURL",'http://localhost/Website_Php_Mysql_Pure/');
define("BaseURLAdmin",'http://localhost/Website_Php_Mysql_Pure/admin/');

// to include any folder od css js bootstrap
define("ASSEST",'http://localhost/Website_Php_Mysql_Pure/assest');
// get the current code working directory
define("BL",__DIR__.'/');
define("aze",__DIR__.'/admin/');


// connect with database

require_once(BL.'function/db.php');

?>