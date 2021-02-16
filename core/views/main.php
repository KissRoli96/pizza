<?php


if (isset($_SESSION['flash'])) {
    if (isset($_SESSION['flash']['success'])) {
        echo "<div class='list-group-item list-group-item-action list-group-item-success'>" . $_SESSION['flash']['success'] . "</div>";
    }

    if (isset($_SESSION['flash']['error'])) {
        echo "<div class='list-group-item list-group-item-action list-group-item-danger'>" .  $_SESSION['flash']['error'] . "</div>";
    }
    unset($_SESSION['flash']);
}

$pizzas = new Pizza();
echo $pizzas->getAllPizzas();
?>

<!doctype html>
<html lang="en">
<head>
    <title>Pizzeria -- Kiss Roland</title>
</head>
<body>

<div>
    <h1 class="display-3">Pizzeria</h1>
</div>

<p>
    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur earum eius error laudantium magni minus modi officiis repellat. Dolore est hic ipsam labore nihil nulla obcaecati odit placeat quaerat repellat.</span><span>A aliquam assumenda beatae distinctio ducimus est eum, exercitationem hic impedit ipsum iste laboriosam maxime neque nesciunt nisi optio quae quas quibusdam, quidem saepe, sapiente sint totam ullam voluptate voluptates!</span>
</p>

<div class="container">
    <div class="row">
        <div class="col">
            <img class="picture" src="pictures/main.jpg" alt="pizza1">
            <p>pizza 1</p>
        </div>
        <div class="col">
            <p>Pizza 2</p>
        </div>
        <div class="w-100"></div>
        <div class="col">Column</div>
        <div class="col">Column</div>
    </div>
</div>

</body>
</html>