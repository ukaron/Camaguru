<?php
namespace Camaguru\Controllers;

use Camaguru\View\View;

class UsersController
{
    private $view;

    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
    }

    public function signUp()
    {
        echo 'здесь будет код для регистрации пользователей';
    }
}

?>