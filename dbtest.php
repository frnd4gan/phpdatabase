<?php
$dbhost = 'localhost';
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = 'root_admin';
$dbpwd = 'root_admin';
$dbname = 'sampledb';

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
