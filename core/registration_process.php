<?php
session_start();
require_once 'models/Model.php';
require_once 'models/User.php';
require_once 'database/DbConnection.php';
require_once 'functions.php';


if (isset($_POST['username']) && isset($_POST['password'])) {

   $username = $_POST['username'];
   $password = $_POST['password'];

   //validalas
    $valid = true;

    //validalasi fuggveny megvalositasa ( terjen vissza true vagy false)

    // validalasi szabalyok
    if (empty($username) or strlen($username) < 6) {
        $valid = false;
    }

    if (empty($password) or strlen($password) < 6) {
        $valid = false;
    }


    if ($valid) {

        $user = new User();
        $user->username = $username;
        $user->pwd = $password;

         if ($user->insert()) {
            //redirect sikeres regisztracio megfelelo kijelzese
             header('Location: http://localhost/' . generateViewUrl('registration'));
             $_SESSION['flash']['success'] = 'Regisztráció sikeres,Üdvözüljük '. $user->username .' !';
         }
    } else {
            header('Location: http://localhost/' . generateViewUrl('registration'));
            $_SESSION['flash']['error'] = 'A regisztració nem sikerült, kerlek adj meg helyes adatokat!';
            // vissza irányitjuk , hogy javítson az adatokon.
    }
}