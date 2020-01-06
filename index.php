<?php
if (!isset($_SESSION['login']))
    header("Location: ./sign_in.php");
include('header.php');?>

<?php include ('footer.php');?>

