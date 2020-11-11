<?php

include 'core/database/DbConnection.php';
include 'core/User.php';
include 'core/ViewUser.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>index</title>
</head>
<body>
<?php
  $users = new ViewUser();
    $users->showAllusers();

?>
</body>
</html>