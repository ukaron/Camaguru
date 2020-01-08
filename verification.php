<?php
include_once 'config/database.php';
$tokenGet = $_GET['token'];
$loginGet = $_GET['login'];

    $connect = new connectBD();
    $connect->connect();
    $query = $connect->DBH->prepare("SELECT * FROM possibleUsers WHERE login = ? AND token = ?");
    $query->execute(array($loginGet, $tokenGet));
    $data = $query->fetch();
    $pass = $data['pass'];
    $email = $data ['email'];
    if ($pass != null)
        {
            $query_1 = $connect->DBH->prepare("SELECT * FROM activeUsers WHERE login = ?");
            $query_1->execute(array($loginGet));
            if ($query_1->fetch() != null)
                header("Location: alreadyExists.php");
            else
                $query_3 = $connect->DBH->query("INSERT INTO activeUsers (login, pass, email) VALUES ('$loginGet','$pass', '$email');");
            $query_2 = $connect->DBH->query("DELETE FROM possibleUsers WHERE login='$loginGet';");
            $_SESSION['login'] = $loginGet;
            header("Location: verifSucces.php");
        }
    else
    {
        $query_2 = $connect->DBH->query("DELETE FROM possibleUsers WHERE login='$loginGet';");
        header("Location: alreadyVerified.php");
    }
    $connect->commit();
    $connect->closeConnect();

?>