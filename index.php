<?php
session_start();
if (!isset($_SESSION['login']))
   header("Location: ./sign_in.php");?>
<?php include('header.php');?>

<?php include ('footer.php');?>

