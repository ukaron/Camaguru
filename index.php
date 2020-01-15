<?php
session_start();
if (!isset($_SESSION['login']))
   header("Location: ./sign_in.php");
include ('config/database.php')
?>
<?php include('header.php');?>

<div class="effects">
    <?php
    $connect = new connectBD();
    $connect->connect();
    $query = $connect->DBH->query("SELECT name FROM picEffect;");
    $pic = $query->fetchAll();
    for ($i = 0; $i < 3; $i++)
      echo "<img src=resources/".($pic[$i]['name'])." height=180 >";
    ?>
</div>
<div class="contentarea">
    <h1>
        Camaguru
    </h1>
    <p>
        Click buttom %)
    </p>
    <div class="camera">
        <video id="video" width="320" height="240">Video stream not available.</video>
        <button id="startbutton">Take photo</button>
    </div>
    <canvas id="canvas" width="320" height="240">
    </canvas>
</div>
<script src="script.js"></script>
<?php include ('footer.php');?>

