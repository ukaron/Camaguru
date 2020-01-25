<?php
session_start();
if (!isset($_SESSION['login']))
    header("Location: ./sign_in.php");
include ('config/database.php');
include('header.php');
$login = $_SESSION['login'];
$connect = new connectBD();
$connect->connect();
$query = $connect->DBH->query("SELECT fname, lname, userpic, info FROM activeUsers WHERE login='".$login."';");
$data = $query->fetch();
$fname = $data['fname'];
if (!isset($fname))
    $fname = "First name";
$lname = $data['lname'];;
if (!isset($lname))
    $lname = "Last name";
$userpic = $data['userpic'];;
if (!isset($userpic))
    $userpic = "/resources/44884218_345707102882519_2446069589734326272_n.jpg";
$info = $data['info'];;
if (!isset($info))
    $info = "BIO";
?>
<div class="main_block">
    <div class="main">
        <div class="form">
            <h1>Change information</h1>
            <div>
                <h2><?php echo $login ?></h2>
                <div>
                        <img alt="Add a profile photo"  src="<?php echo $userpic ?>">
                </div>
            </div>
            <form action="" method="POST" name="create">
                <table>
                    <tr>
                        <th><input type="text" class="form-control" name="fname" id="fname"
                                   placeholder="<?php echo $fname ?>"></th>
                    </tr>
                    <tr>
                        <th><input type="text" class="form-control" name="lname" id="lname"
                                   placeholder="<?php echo $lname ?>"></th>
                    </tr>
                    <tr>
                        <th> <input type="text" class="form" name="bio" id="bio"
                                    placeholder="<?php echo $info ?>"></th>
                    </tr>
                    <tr>
                        <th>  <input id="bottom" type="submit" name="submit" value="Save"></th>
                    </tr>
                </table>
            </form>
            <ul id="nav">
                <li><a href="reset_pass.php">Change Password</a></li>
            </ul>
        </div>
    </div>
</div>