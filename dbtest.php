<?php
echo "<br> Host".$dbhost = getenv("MYSQL_SERVICE_HOST");
echo "<br>Port".$dbport = getenv("MYSQL_SERVICE_PORT");
echo "<br> User".$dbuser = getenv("MYSQL_USER");
echo "<br> password".$dbpwd = getenv("MYSQL_PASSWORD");
echo "<br>DBname".$dbname = getenv("MYSQL_DATABASE");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
