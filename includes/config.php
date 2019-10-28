<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("America/New_York");

$dbstr = getenv('CLEARDB_DATABASE_URL');

$dbstr = substr("$dbstr", 8);
$dbstrarruser = explode(":", $dbstr);


$dbstrarrhost = explode("@", $dbstrarruser[1]);
$dbstrarrrecon = explode("?", $dbstrarrhost[1]);
$dbstrarrport = explode("/", $dbstrarrrecon[0]);

$dbpassword = $dbstrarrhost[0];
$dbhost = $dbstrarrport[0];
$dbport = $dbstrarrport[0];
$dbuser = $dbstrarruser[0];
$dbname = $dbstrarrport[1];

unset($dbstrarrrecon);
unset($dbstrarrport);
unset($dbstrarruser);
unset($dbstrarrhost);

unset($dbstr);

$dbanfang = 'mysql:host=' . $dbhost . ';dbname=' . $dbname;

try {
    $con = new PDO($dbanfang, $dbuser, $dbpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>