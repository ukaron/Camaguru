<?php
session_start();
if (isset($_GET['token'])){
    include_once 'config/database.php';
    $connect = new connectBD();
    $connect->connect();

    $token = $_GET['token'];
    $query = $connect->DBH->query("SELECT * FROM activeUsers WHERE remember_token='$token';");
    if (($query->fetch()) != null)
    {
        if (isset($_POST['pass']))
        {

            $pass = hash('sha256',$_POST['pass']);
            $query_1 = $connect->DBH->query("UPDATE activeUsers SET pass='$pass' WHERE remember_token='$token'; ");
            $query_2 = $connect->DBH->query("UPDATE activeUsers SET remember_token='' WHERE remember_token='$token'; ");
            echo  "<div class=\"main_block\">
    <div class=\"main\">
        <div class=\"form\">
            <p>Password changed </p><br>
            <a href=\"index.php\">Go to start page</a>
        </div>
    </div>
</div>";
            exit();
        }
    }
}
?>
<?php include('header.php');?>
<div class="main_block">
    <div class="main">
        <div class="form">
            <h1>Enter a new password</h1>
            <form action="" method="POST" name="NewPass">
                <table>
                    <tr>
                        <th> <input type="text" class="form-control" name="pass" id="pass"
                                    placeholder="Input new password"></th>
                    </tr>
                    <tr>
                        <th>  <input id="bottom" type="submit" name="submit" value="OK"></th>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php include('footer.php');?>
