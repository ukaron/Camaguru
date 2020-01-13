<?php
session_start();
if (!isset($_SESSION['login']))
   header("Location: ./sign_in.php");
?>
<?php include('header.php');?>
<script src="script.js"></script>
<div class="contentarea">
    <h1>
        CAMAGURU
    </h1>
    <p>
        --_--
    </p>
    <div class="camera">
        <video id="video" width="320" height="240">Video stream not available.</video>
        <button id="startbutton">Take photo</button>
        <canvas id="canvas">
        </canvas>
    </div>

</div>
<?php include ('footer.php');?>

