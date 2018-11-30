<?php
define('DB_SERVER', 'localhost:3036');
define('DB_USERNAME', 'b4dd80b69110f3');
define('DB_PASSWORD', 'e95aa0d2@us');
define('DB_DATABASE', 'heroku_c2e9edb2ae8e855');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$db)
{
    die('Unable to connect: ' . mysql_error());
}
?>