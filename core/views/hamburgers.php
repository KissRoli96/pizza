<?php
$hamburgers = new Hamburger();
?>

<div class="container">
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Hamburger ID</th>
            <th scope="col">Hamburger</th>
            <th scope="col">Price</th>
            <th scope="col">Size</th>
        </tr>
        </thead>
        <?php
        foreach ($hamburgers->getAllHamburgers() as $hamburger){
            ?>
            <tbody>
            <tr>
                <th scope="row"><?= $hamburger['id'] ?></th>
                <th ><?= $hamburger['hamburgername'] ?></th>
                <th><?= $hamburger['price'] . " HUF" ?></th>
                <th><?= $hamburger['size']  ?></th>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>