<?php
session_start();
require_once 'models/Model.php';
require_once 'models/User.php';
require_once 'database/DbConnection.php';
require_once 'functions.php';


if (isset($_POST['username']) && isset($_POST['password'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];

    if (validateRegisterForm($username,$password)) {

        $user = new User();
        $user->username = $username;
        $user->pwd = $password;

         if ($user->insert()) {
             //redirect sikeres regisztracio megfelelo kijelzese
             $_SESSION['flash']['success'] = 'Regisztráció sikeres,Üdvözüljük '. $user->username .' !';
             redirect('registration');
         }
    }
}
$_SESSION['flash']['error'] = 'A regisztració nem sikerült, kerlek adj meg helyes adatokat!';
redirect('registration');
// vissza irányitjuk , hogy javítson az adatokon.