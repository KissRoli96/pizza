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
            <th scope="col">Is he/she admin?</th>
        </tr>
        </thead>
        <?php
        foreach ($users->getAllusers() as $user){
            ?>
            <tbody>
            <tr>
                <th scope="row"><?= $user['id'] ?></th>
                <th><?= $user['username'] ?></th>
               <th><?php
                    if ($user['admin'] == 1) {
                        echo "Yes";
                    } else
                        echo "No";
                ?>
                </th>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
</div>

