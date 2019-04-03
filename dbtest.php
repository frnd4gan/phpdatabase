<?php
try{
$pdo = new PDO('mysql:host=localhost;dbname=sampledb;charset=utf8','root_admin','root_admin');
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
print "Connected to databse";
}catch(PDOException $Exception) {
die('Connection failed ー:'.$Exception->getMessage());
}


?>
