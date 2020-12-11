<?php
$drinks = new ViewDrink();
?>

<div class="container">
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">Ital ID</th>
        <th scope="col">Ital</th>
        <th scope="col">Ár</th>
        <th scope="col">Kiszerelés</th>
    </tr>
    </thead>
    <?php
    foreach ($drinks->showAllDrinks() as $drink){
        ?>
        <tbody>
        <tr>
            <th scope="row"><?= $drink['id'] ?></th>
            <th ><?= $drink['drinkname'] ?></th>
            <th><?= $drink['price'] . " HUF" ?></th>
            <th><?= $drink['size'] . " l" ?></th>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>
</div>