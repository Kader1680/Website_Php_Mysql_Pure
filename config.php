<?php

session_start();
define("BaseURL",'http://localhost/Website_Php_Mysql_Pure/');
define("assest",'http://localhost/Website_Php_Mysql_Pure/assest/');
define("BaseURLAdmin",'http://localhost/Website_Php_Mysql_Pure/admin/');

// to include any folder od css js bootstrap
define("ASSEST",'http://localhost/Website_Php_Mysql_Pure/assest');
// get the current code working directory
define("BL",__DIR__.'/');
define("BLC",__DIR__.'/');
define("aze",__DIR__.'/admin/');
define("ass",__DIR__.'/assest/');




// connect with database

require_once(BL.'function/db.php');
?>