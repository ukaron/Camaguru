<?php

include_once 'config/database.php';
$connect = new connectBD();
$connect->connect();

if (isset($_POST['email']))
{
    $email = $_POST['email'];
    $query = $connect->DBH->query("SELECT * FROM activeUsers WHERE email = '$email';");
    if (($query->fetch()) != null)
    {
        $token = hash('tiger192,3', time().$email);
        $query_1 = $connect->DBH->query("UPDATE activeUsers SET remember_token='$token' WHERE email='$email';");
        $connect->closeConnect();
        mail($email, "Reset password", "In order to change the password, follow the link http://localhost:2222/resetPassPage.php?token=".$token);
        header("Location: ./resetPassPageInfo.php");
    }
    else
        echo "account with such an email does not exist";
}
    ?>
<?php include('header.php');?>
<div class="main_block">
    <div class="main">
        <div class="form">
            <h1>Reset password</h1><br>
            <h4>Enter your email and we'll send you a link to get back into your account.</h4><br>
            <form action="" method="POST" name="ResetPass">
                <table>
                    <tr>
                        <th><input type="text" class="form-control" name="email" id="email"
                                   placeholder="Input email"></th>
                    </tr>
                    <tr>
                        <th>  <input id="bottom" type="submit" name="submit" value="OK"></th>
                    </tr>
                </table>
            </form>
            <ul id="nav">
                <li><a href="create.php">Create an account</a></li>
                <li><a href="reset_pass.php">Forgotten password?</a></li>
            </ul>
        </div>
    </div>
</div>
<?php include('footer.php');?>