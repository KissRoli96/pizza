<?php
$users = new ViewUser();
?>
<div class="container">
<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col">Felhasznalo ID</th>
        <th scope="col">Nev</th>
        <th scope="col">Jelszo</th>
    </tr>
    </thead>
    <?php
    foreach ($users->showAllusers() as $user){
        ?>
        <tbody>
        <tr>
            <th scope="row"><?= $user['id'] ?></th>
            <th ><?= $user['username'] ?></th>
            <th><?= $user['pwd'] ?></th>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>
</div>