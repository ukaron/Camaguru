<?php
require('config/database.php');

class CreateAccount
{
    private $email_c;
    private $login_c;
    private $pass_c;
    private $maxLenLogin;
    private $maxLenPass;
    private $minLenLogin;
    private $minLenPass;
    function __construct($login,$mail,$pass)
    {
        $this->email_c = htmlspecialchars($mail);
        $this->login_c = htmlspecialchars($login);
        $this->pass_c = htmlspecialchars($pass);
        $this->maxLenLogin = 12;
        $this->maxLenPass = 32;
        $this->minLenLogin = 3;
        $this->minLenPass = 6;
    }
}

?>