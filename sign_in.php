<?php
session_start();
if (isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['submit'])){
    include_once 'config/database.php';
    $connect = new connectBD();
    $connect->connect();

    $login = $_POST['login'];
    $pass = hash(sha256, $_POST['pass']);
    $query = $connect->DBH->prepare("SELECT * FROM activeUsers WHERE login = ? AND pass = ?");
    $query->execute(array($login, $pass));
    if ($query->fetch())
    {
        $_SESSION['login'] = $login;
        $_COOKIE['login'] = $login;
        header("Location: index.php");
    }
    else
        echo "Incorrect login or password";
}
?>
<?php include('header.php');?>
    <div class="main_block">
        <div class="main">
            <div class="form">
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

<?php include('footer.php');?>

