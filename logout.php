<?php
session_start();
if ($_SESSION['login'] != null)
    $_SESSION['login'] = null;
    header("Location: ./sign_in.php")
?>
