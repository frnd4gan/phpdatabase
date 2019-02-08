<?php
echo "<br> host".$dbhost = getenv("MYSQL_SERVICE_HOST");
echo "<br> port".$dbport = getenv("MYSQL_SERVICE_PORT");
echo "<br> User ".$dbuser = getenv("databaseuser");
echo "<br>PWD ".$dbpwd = getenv("databasepassword");
echo "<br>database ".$dbname = getenv("databasename");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
