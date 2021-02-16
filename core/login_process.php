<?php
session_start();
require_once 'models/Model.php';
require_once 'models/User.php';
require_once 'database/DbConnection.php';
require_once 'functions.php';

if ((isset($_POST['username'])) && (isset($_POST['password']))) {

    $username = $_POST['username'];
    $password = $_POST['password'];

        $user = new User();
        $user->username = $username;
        $user->pwd = $password;


      if ($user->login()) {

                $_SESSION['flash']['success'] = "Registration Successful!";
                redirect('main');


   }
    $_SESSION['flash']['error'] = "Incorrect data!";
    redirect('login');
}





