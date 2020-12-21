<?php
session_start();
require_once 'models/Model.php';
require_once 'models/User.php';
require_once 'database/DbConnection.php';
require_once 'functions.php';

if ((isset($_POST['username'])) && (isset($_POST['password']))) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (checkLoginValidation($username, $password)) {
        $user = new User();
        $user->username = $username;
        $user->pwd = $password;

        if ($user->login()) {
            foreach ($user->login() as $user) {
                if ($password == $user['pwd'] and $username == $user['username']) {
                    $_SESSION['username'] = $username;
                    $_SESSION['password'] = $password;

                    $_SESSION['flash']['success'] = "Sikeres bejelentkezés!";
                    header('Location: http://localhost/' . generateViewUrl('main'));
                }
            }
        }
    }
    $_SESSION['flash']['error'] = "Hibás bejelentkezési adatok! Töltsd ki!";
    header('Location: http://localhost/' . generateViewUrl('login'));
}

