<?php
session_start();

if ($_GET['login'] != '' and $_GET['passwd'] != '')
{
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
$login = $_SESSION['login'];
$passwd = $_SESSION['passwd'];
?>
<!DOCTYPE HTML PUBLIC «-//W3C//DTD HTML 4.01 Transitional//EN» «http://www.w3.org/TR/html4/loose.dtd»>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>CAMAGURU</title>
</head>
<body>
    <div class="header">
        <ul id="nav"  style="--items: 3;">
            <li><a href="logout.php">Logout</a></li>
            <li><a href="config/database.php">Pictures</a></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </div>
    <div class="main_block">
        <div class="main">
            <div class="sign_in">
                <h1>Sign in</h1>
                <form action="" method="POST" name="sign_in">
                    <table>
                        <tr>
                            <th><input type="text" class="form-control" name="login" id="login"
                                   placeholder="Input login"></th>
                        </tr>

                        <tr>
                            <th> <input type="text" class="form-control" name="pass" id="pass"
                                   placeholder="Input password"></th>
                        </tr>
                        <tr>
                            <th>  <input id="bottom" type="submit" name="submit" value="OK"></th>
                        </tr>
                    </table>
                </form>
                <ul id="nav">
                    <li><a href="create.php">Create an account</a></li>
                    <li><a href="#">Forgotten password?</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer">
        <footer></footer>
    </div>
</body>
</html>