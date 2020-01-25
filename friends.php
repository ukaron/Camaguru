<?php
session_start();
if (!isset($_SESSION['login']))
    header("Location: ./sign_in.php");
include ('config/database.php');
include('header.php');
?>
    <div class="form">
        <div class="search">
            <form id="search_friends_form" method='GET'>
                <input id="search_friends_input" type="text">
                <input id="bottom" type="submit" name="search">
            </form>
        </div>
        <div class="friend_list">

            <?php
            $login = $_SESSION['login'];
            $connect = new connectBD();
            $connect->connect();
            $query = $connect->DBH->query("SELECT * FROM friends JOIN activeUsers WHERE friend_one='".$login."';");
            $users = $query->fetchAll();
            for($i = 0; $i <= count($users); $i++)
            {
                echo "<a href='/gallery.php?login=".$users[0][$i]."'>".$users[$i][6] .$users[$i][7]."</a><br>";
            }

            ?>

        </div>
    </div>



<?php include ('footer.php');?>