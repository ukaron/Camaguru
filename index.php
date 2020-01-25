<?php
session_start();
if (!isset($_SESSION['login']))
   header("Location: ./sign_in.php");
include ('config/database.php');
include ('ClassCreatePhoto.php');
if(isset($_POST['photo']) && isset($_POST['mask']))
{
    $data = $_POST;
    $photo = new Photo($data);
    $photo->mergePhoto();
}
?>
<?php include('header.php');?>


<div class="contentarea">
    <h1>
        Camaguru
    </h1>
    <p>
        Click buttom %)
    </p>
        <div class="effects">
            <form method="post" id='form' name='photo' action="">
                <?php
                $connect = new connectBD();
                $connect->connect();
                $query = $connect->DBH->query("SELECT name FROM picEffect;");
                $pic = $query->fetchAll();
                for ($i = 0; $i < count($pic); $i++)
                {
                    echo "<img src=resources/".($pic[$i]['name'])." height=180 >";
                    echo "<input name='mask' value=resources/".($pic[$i]['name'])." type=radio>";
                }
                ?>
            <video id="video" width="320" height="240">Video stream not available.</video>
            <input type="submit" name="file" id="startbutton" value="take photo">
            </form>
        </div>
        <canvas id="canvas" width="0" height="240">
        </canvas>
        <div class="output">
            <img id="photo" alt="The screen capture will appear in this box." src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACWCAYAAABkW7XSAAAEaUlEQVR4Xu3UAQkAMAwDwdW/k5rcYC4ergrCpWR29x5HgACBgMAYrEBLIhIg8AUMlkcgQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEDBYfoAAgYyAwcpUJSgBAgbLDxAgkBEwWJmqBCVAwGD5AQIEMgIGK1OVoAQIGCw/QIBARsBgZaoSlAABg+UHCBDICBisTFWCEiBgsPwAAQIZAYOVqUpQAgQMlh8gQCAjYLAyVQlKgIDB8gMECGQEDFamKkEJEHjr+8DkBQk1VgAAAABJRU5ErkJggg==">
        </div>
</div>
<div class="gallery" id="gallery">

</div>
<script src="script.js"></script>
<?php include ('footer.php');?>

