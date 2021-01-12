<?php 
// DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','tms');
// Establish database connection.
define('DB_HOST','remotemysql.com
');
define('DB_USER','4KkQdzOZUt');
define('DB_PASS','01PAz0UUnj');
define('DB_NAME','4KkQdzOZUt');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>