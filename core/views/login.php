<?php

if (isset($_SESSION['flash'])) {
    if (isset($_SESSION['flash']['success'])) {
        echo "<div class='list-group-item list-group-item-action list-group-item-success'>" . $_SESSION['flash']['success'] . "</div>";
    }

    if (isset($_SESSION['flash']['error'])) {
        echo "<div class='list-group-item list-group-item-action list-group-item-danger'>" .  $_SESSION['flash']['error'] . "</div>";
    }
    unset($_SESSION['flash']);
}
?>

<div class="container">

    <form action="/pizzaoop/core/login_process.php" method="post" >
        <div class="mb-3">
            <label for="username" class="form-label">Nev</label>
            <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>

</div>
