<?php
session_start();
if (!isset($_SESSION['login']))
    header("Location: ./sign_in.php");
if($_GET['login'] != null)
{

    $login = $_GET['login'];
}
else
    $login = $_SESSION['login'];
include ('config/database.php');
include ('ClassCreatePhoto.php');
?>
<?php include('header.php');?>
<div class="gallery_main">
    <?php

    $connect = new connectBD();
    $connect->connect();
    $query = $connect->DBH->query("SELECT path FROM UserPhoto WHERE login='".$login."';");
    $photo = $query->fetchAll();
    for($i = 0; $i < count($photo); $i++)
    {
        echo "<img src=/".$photo[$i]['path']." height=180 >";
    }
    ?>
</div>

<?php include ('footer.php');?>