<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN ACCESS</title>
    <style>
        <?php
            include "style/custom.css";
        ?>
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">
                <h2>TU STORE</h2>
            </div>
            <div class="btn-group">
                <form class="btn home" method="POST">
                    <input type="submit" value="Home" name="home">
                </form>
                <form class="btn item" method="POST">
                    <input type="submit" value="Item" name="item">
                </form>
                <form class="btn order" method="POST">
                    <input type="submit" value="Order" name="order">
                </form>
                <form class="btn history" method="POST">
                    <input type="submit" value="History" name="history">
                </form>
            </div>
        </div>
        <br>
        <div class="contents">
            <?php
                if (isset($_POST["home"])) {
                    require "home.php";
                }
                
                if (isset($_POST["item"])) {
                    require "item.php";
                }

                if (isset($_POST["order"])) {
                    require "order.php";
                }
                
                if (isset($_POST["history"])) {
                    require "history.php";
                }
            ?>

            <?php
                if(isset($_POST["new-item"])){
                    require "home.php";
                    require "new-item.php";
                }

                if(isset($_POST["update-item"])){
                    require "home.php";
                    require "update-item.php";
                }
            ?>
        </div>
    </div>
</body>
</html>