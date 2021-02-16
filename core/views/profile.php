<?php
$users = new  User();

$id = $_SESSION['id'];



echo $users->findOne($id);




if (isset($_SESSION['flash'])) {
    if (isset($_SESSION['flash']['success'])) {
        echo "<div class='list-group-item list-group-item-action list-group-item-success'>" . $_SESSION['flash']['success'] . "</div>";
    }

    if (isset($_SESSION['flash']['error'])) {
        echo "<div class='list-group-item list-group-item-action list-group-item-danger'>" .  $_SESSION['flash']['error'] . "</div>";
    }
    unset($_SESSION['flash']);
}

