<?php
        $pizzas = new Pizza();
?>

<div class="container">
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">Pizza ID</th>
        <th scope="col">Pizza</th>
        <th scope="col">Ár</th>
        <th scope="col">Méret</th>
    </tr>
    </thead>
    <?php
    foreach ($pizzas->getAllPizzas() as $pizza){
    ?>
    <tbody>
    <tr>
        <th scope="row"><?= $pizza['id'] ?></th>
        <th ><?= $pizza['pizzanev'] ?></th>
        <th><?= $pizza['ar'] ?></th>
        <th><?= $pizza['meret'] . " cm" ?></th>
    </tr>
    </tbody>
    <?php
    }
    ?>
</table>
</div>