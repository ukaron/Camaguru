<?php
include_once 'config/database.php';
$tokenGet = $_GET['token'];
$loginGet = $_GET['login'];

    $connect = new connectBD();
    $connect->connect();
    $query = $connect->DBH->prepare("SELECT * FROM users WHERE login = ? AND token = ?");
    $query->execute(array($loginGet, $tokenGet));
    if (($row_1 = $query->fetch()) > 0)
        {
            $query_2 = $connect->DBH->query("UPDATE users SET varif=1 WHERE login='$loginGet';");
            $query_3 = $connect->DBH->query("UPDATE users SET token='' WHERE login='$loginGet';");
            $_SESSION['login'] = $loginGet;
            header("Location: verifSucces.php");
        }
    else
        header("Location: alreadyVerified.php");
    $connect->DBH->commit();
    $connect->closeConnect();

?>