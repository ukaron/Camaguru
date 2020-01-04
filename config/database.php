<?php
$DB_DSN = 'mysql:host=192.168.99.101;port=3307;dbname=cam_users;';
$DB_USER = 'root';
$DB_PASSWORD = 'root';
try{
    $DBH = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>