<?php


?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/pizzaoop">Kezdőlap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= generateViewUrl('pizzas') ?>">Pizzak</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= generateViewUrl('hamburgers') ?>">Hamburgerek</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('drinks') ?>">Italok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('users') ?>" tabindex="-1" aria-disabled="true">Rendelések</a>
                </li>
                <?php

                if (!isset($_SESSION['username'])) {
                    ?>
                    <li class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('login') ?>" tabindex="-1" aria-disabled="true">Bejelentkezés</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?= generateViewUrl('registration') ?>" tabindex="-1" aria-disabled="true">Regisztráció</a>
                    </li>

                <?php
                } else {
                    ?>
                    <li class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('logout') ?>" tabindex="-1" aria-disabled="true">Kijelentkezés</a>
                </li>
                <?php
                }
                ?>

                <li class="nav-item">
                    <a class="nav-link " href="<?= generateViewUrl('relationship') ?>" tabindex="-1" aria-disabled="true">Kapcsolat</a>
                </li>
            </ul>
        </div>
    </div>
</nav>