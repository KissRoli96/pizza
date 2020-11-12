<?php

include 'core/database/DbConnection.php';
include 'core/User.php';
include 'core/Pizza.php';
include 'core/ViewUser.php';
include 'core/ViewPizza.php';
include 'head.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>index</title>
</head>
<body>
<?php
    $users = new ViewUser();
    $users->showAllusers() . "<br>";

?>
-------------------------------------
<br>
<?php

    $pizzas = new ViewPizza();
    $pizzas->showAllPizzas();

?>

</body>
</html>


<?php
include 'footer.php';
?>