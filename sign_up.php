<?php
require('config/database.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$pass_hash = hash('sha512', $pass);
$DBH->query("INSERT INTO users (login, pass, email) VALUES ('$login','$pass_hash', '$email');");
$DBH->commit();
header("Location: conf_email.php");
?>