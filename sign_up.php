<?php
include_once 'config/database.php';
include_once 'ClassCreateAccount.php';

if ($_POST['login'] == '' && $_POST['pass'] == '' && $_POST == '')
    echo "False";
else
    {
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $data = $login.$pass;
        $token = hash(sha256, $data);

        $acc = new CreateAccount($login, $pass, $email, $token);
        if ($acc->register())
        {
            mail($email, "Confirmation of registration", "To complete the registration, follow the link http://localhost:2222/verification.php?token=".$token."&login=".$login);
            header("Location: ./conf_email.php");
        }
    }
?>