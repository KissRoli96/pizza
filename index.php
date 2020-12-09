<?php

include 'core/database/DbConnection.php';
include 'core/User.php';
include 'core/Pizza.php';
include 'core/ViewUser.php';
include 'core/ViewPizza.php';
include 'head.php';
?>

<body>

<?php
include 'navbar.php';
?>

<div class="main">
        <div class="starter-template" >
            <h1>Pizza projekt road to EPAM</h1>
            <h5>Roli</h5>

            <table style="width:100%" class="table">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                </tr>

                <tr class="odd" id="odd">
                    <td>Jill</td>
                    <td>Smith</td>
                    <td>50</td>
                </tr>

                <tr class="even">
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                </tr>

                <tr class="odd">
                    <td>Jill</td>
                    <td>Smith</td>
                    <td>50</td>
                </tr>

                <tr class="even">
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                </tr>
            </table>




            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            <?php
            $users = new ViewUser();
            $users->showAllusers() . "<br>";

            ?>

            -------------------------------------
            <br>
            <br>
            <?php
            $pizzas = new ViewPizza();
            $pizzas->showAllPizzas();

            ?>
        </div>

<!--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<!--    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>-->
<!--    -->
</div>

<div class="footer">
    <?php
    include 'footer.php';
    ?>
</div>

</body>
