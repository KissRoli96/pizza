<?php

$users = new  User();

?>

<div class="container">
    <h3>Kapcsolat</h3>
    <br>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Employes ID</th>
            <th scope="col">Nev</th>
            <th scope="col">Jelszava</th>
        </tr>
        </thead>
        <?php
        foreach ($users->getAlladmins() as $user){
        ?>
        <tbody>
        <tr>
            <th scope="row"><?= $user['id'] ?></th>
            <th><?= $user['username'] ?></th>
            <th><?= $user['employee'] ?></th>
        </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
</div>

