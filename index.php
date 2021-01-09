<?php
session_start();
require_once 'core/database/DbConnection.php';
require_once 'core/models/Model.php';
require_once 'core/models/User.php';
require_once 'core/models/Pizza.php';
require_once 'core/models/Drink.php';
require_once 'core/models/Hamburger.php';
require_once 'head.php';
require_once 'core/functions.php';



?>

<body>

<?php
require_once 'navbar.php';
?>

<div class="main">

    <?php
    var_dump($_SESSION);
        if (!isset($_GET['page'])) {
            require_once "core/views/main.php";
        } elseif (!empty($_GET['page'])) {
            require_once "core/views/" . $_GET['page'] . ".php";
        }

    ?>

</div>

<div class="footer">

    <?php
    require_once 'footer.php';
    ?>

</div>

</body>
