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
                        "src" => "/pizzaoop/core/pictures/main.jpg",
                        "alt" => "kep leiras 1"
                        ]
            ],
        1 => [
                "title" => "Pizza 2",
                "desc" => "Masik pizza
                buzi kelcsi",
                "picture" => [
                        "src" => "/pizzaoop/core/pictures/main2.jpg",
                        "alt" => "kep leiras 2"
                         ]
            ],
        2 => [
                "title" => "Pizza 3",
                "desc" => " Arulo buzi senki szar ERESZ",
                "picture" => [
                        "src" => "/pizzaoop/core/pictures/main3.jpg",
                        "alt" => "kep leiras 3"

                        ]

            ],
        3 => [
                "title" => "Pizza 4",
                "desc" => "Ez a 4 undorito szar pizza",
                "picture" => [
                        "src" => "/pizzaoop/core/pictures/main4.jpg",
                        "alt" => "kep leiras 4"

                        ]
            ]

];

?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <h1>
              Cim 1
            </h1>
                Pacific School of Religion (PSR) is a private Christian seminary in Berkeley, California. It maintains covenantal relationships with the United Church of Christ, the United Methodist Church, and the Disciples of Christ, ensuring the school provides the necessary requirements for candidates to seek ordination within these denominations. These three denominations account for approximately half of the student population of PSR. The school has also maintained close relationships with the Unitarian Universalist Association, the Universal Fellowship of Metropolitan Community Churches, the African Methodist Episcopal Church, as well as other denominations. Over the years PSR has provided training for clergy from a wide range of religious traditions including Buddhists, Jews, Pagans, Pentecostals, and Roman Catholics.[3]</div>
        <div class="col-md-6 col-xs-12">
            <h1>
                Cim 2
            </h1>
            The Badè Museum of Biblical Archaeology is housed on the campus of the Pacific School of Religion and contains a sizable collection of artifacts. The museum is named for the past Professor of Old Testament literature and Semitic languages at PSR, William F. Badè.[11] The largest portion of the permanent collection was excavated under the direction of Dr. Badè at Tell en-Nasbeh, believed to be the site of the Biblical city of Mizpah, from 1926 to 1935. Artifacts recovered from Tell en-Nasbeh encompass the entire life of the community, including lamps, jewellery, and pitchers found in the town's houses and tombs.[12] The permanent collection of the Badè also include a selection of over 300 rare Bibles and other books, collected by John Howell in the early part of the 20th century.[13]</div>
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