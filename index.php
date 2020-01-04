<?php
session_start();
$_SESSION['login'] = 'qwe';
if ($_SESSION['login'] == '')
{
    header("Location: sign_in.php");
}
else{
    header("Location: index.html");
}
?>