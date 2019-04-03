<?php
echo "<br> Host is ".$dbhost = getenv("MYSQL_SERVICE_HOST");
echo "<br>Port is ".$dbport = getenv("MYSQL_SERVICE_PORT");
echo "<br> User is ".$dbuser = getenv("MYSQL_USER");
echo "<br> password is".$dbpwd = getenv("MYSQL_PASSWORD");
echo "<br>DBname is".$dbname = getenv("MYSQL_DATABASE");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
