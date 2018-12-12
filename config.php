<?php
 define('DB_SERVER', 'us-cdbr-iron-east-01.cleardb.net:3306');
define('DB_USERNAME', 'b4dd80b69110f3');
define('DB_PASSWORD', 'e95aa0d2');
define('DB_DATABASE', 'heroku_c2e9edb2ae8e855');

//  define('DB_USERNAME', 'admin');
//  define('DB_PASSWORD', 'password');
//  define('DB_DATABASE', 'ugphpdatabase');
 
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$db)
{
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
//     die('Unable to connect: ' .  mysqli_connect_error());
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
// mysql://b4dd80b69110f3:e95aa0d2@us-cdbr-iron-east-01.cleardb.net/heroku_c2e9edb2ae8e855?reconnect=true
//Access denied for user 'b4dd80b69110f3'@'ec2-54-165-50-141.compute-1.amazonaws.com' (using password: YES)
$servername = "127.0.0.1";
$username = "sahrmila";
$password = "ban";

// try {
//     $db = new PDO("mysql:host=$servername;dbname=ugphpdatabase", $username, $password);
//     // set the PDO error mode to exception
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// }
// catch(PDOException $e)
// {
//     echo "Connection failed: " . $e->getMessage();
// }

// $db = mysqli_connect($servername, $username, $password, "ugphpdatabase");

// // Check connection
// if (!$db) {
//     die("Connection failed: " . mysqli_connect_error());
// }
?>
