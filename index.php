<?php

require_once 'core/database/DbConnection.php';
require_once 'core/User.php';
require_once 'core/Pizza.php';
require_once 'core/ViewUser.php';
require_once 'core/ViewPizza.php';
require_once 'head.php';

?>

<body>

<?php
require_once 'navbar.php';
?>

<div class="main">


    <?php







        if (!isset($_GET['page'])) {
            require_once "core/main.php";
        } elseif (!empty($_GET['page'])) {
            require_once "core/" . $_GET['page'] . ".php";
        }

    ?>


</div>

<div class="footer">
    <?php
    require_once 'footer.php';
    ?>
</div>

</body>
