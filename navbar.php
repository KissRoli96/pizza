<?php


?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/pizzaoop">Homepage</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= generateViewUrl('pizzas') ?>">Pizzas</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= generateViewUrl('hamburgers') ?>">Hamburgers</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('drinks') ?>">Drinks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('users') ?>" tabindex="-1" aria-disabled="true">Orders</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('relationship') ?>" tabindex="-1" aria-disabled="true">Connection</a>
                </li>

            </ul>
            <?php
                if (isset($_SESSION['username'])) {
                    ?>
                        <a  class="btn btn-outline-success" href="<?= generateViewUrl('profile') ?>">
                           <?= $_SESSION['username'] ?>
                        </a>
            <?php
                }

            if (!isset($_SESSION['username'])) {
                ?>
                <div class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('login') ?>" tabindex="-1" aria-disabled="true">Login</a>
                </div>

                <div class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('registration') ?>" tabindex="-1" aria-disabled="true">Registration</a>
                </div>

                <?php
            } else {
                ?>
                <div class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('logout') ?>" tabindex="-1" aria-disabled="true">Logout</a>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</nav>