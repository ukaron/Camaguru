<?php
session_start();
include_once './config/database.php';
date_default_timezone_set('UTC');
$login = $_SESSION['login'];
if ($_POST['action'])
{
    $tmpPath = './resources/111OOO.png';
    $path = './resources/'.$login.'/'.time().hash(sha256, $login).'.png';
    if (!file_exists('./resources/'.$login))
        mkdir('./resources/'.$login);
    $connect = new connectBD();
    $connect->connect();
    copy($tmpPath, $path);
    $connect->DBH->query("INSERT INTO UserPhoto (path, login) VALUES ('".$path."', '".$login."');");
    $connect->closeConnect();
}
?>