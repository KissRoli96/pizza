<?php

$pizzas = [
        0 => [
                "title" => "Pizza 1",
                "desc" => " Leiras:
                asdasdasdadasdasd
                30 cm
                5000 ft
                asdasdadsda",
                "picture" => [
                        "src" => "/pizzaoop/pictures/main.jpg",
                        "alt" => "kep leiras 1"
                        ]
            ],
        1 => [
                "title" => "Pizza 2",
                "desc" => "Masik pizza
                buzi kelcsi",
                "picture" => [
                        "src" => "/pizzaoop/pictures/main2.jpg",
                        "alt" => "kep leiras 2"
                         ]
            ],
        2 => [
                "title" => "Pizza 3",
                "desc" => " Arulo buzi senki szar ERESZ",
                "picture" => [
                        "src" => "/pizzaoop/pictures/main3.jpg",
                        "alt" => "kep leiras 3"

                        ]

            ],
        3 => [
                "title" => "Pizza 4",
                "desc" => "Ez a 4 undorito szar pizza",
                "picture" => [
                        "src" => "/pizzaoop/pictures/main4.jpg",
                        "alt" => "kep leiras 4"

                        ]
            ]

];

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
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <h1>
              Welcome
            </h1>
            <?php
//            if (isset($_SESSION['username'])) {
//                echo "<h3>Felhasznalo Neve: </h3>";
//                echo $_SESSION['username'] . "<br>";
//            } else {
//                echo "<p>Nem vagy bejelentkezve kerlek jelenkezbe </p>";
//                ?>
<!--                <a href="--><?//= generateViewUrl('login') ?><!--">bejelentkezes </a>-->
<!--            --><?php
//            }
//            ?>
        </div>

        <div class="col-md-6 col-xs-12">


    </div>

    <div class="row">
        <?php
            foreach ($pizzas as $pizza) {
        ?>
                <div class="col-md-3 col-xs-6">
            <h3>
               <?php
               echo $pizza['title'];
               ?>
                </h3>
            <img class="img-fluid" src="<?= $pizza['picture']['src']   ?>"  alt="<?= $pizza['picture']['alt'] ?>">
            <p>
                <?= $pizza['desc'] ?>
                </p>
        </div>
        <?php
       }
        ?>

    </div>
</div>