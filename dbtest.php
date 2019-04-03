<?php
echo "<br> Host is ".$dbhost = getenv("MYSQL_SERVICE_HOST")."<br>";
echo "<br>Port is ".$dbport = getenv("MYSQL_SERVICE_PORT")."<br>";
echo "<br> User is ".$dbuser = 'root_admin';//getenv("MYSQL_USER")."<br>";
echo "<br> password is".$dbpwd = 'root_admin';//getenv("MYSQL_PASSWORD")."<br>";
echo "<br>DBname is".$dbname = 'sampledb';getenv("MYSQL_DATABASE")."<br>";

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
