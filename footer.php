<?php



print_r($_GET);

$id = 10;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<a href="footer.php?id=<?php echo $id ?>">Click Here!</a>

</body>
</html>
