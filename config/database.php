<?php
$DB_DSN = 'mysql:dbname=cam_users;host=localhost';
$DB_USER = 'ukaron';
$DB_PASSWORD = '123';
echo "OH MY1~";
try{
    $DBH = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    echo "OH MY~";
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>