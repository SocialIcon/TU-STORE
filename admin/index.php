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
                <div class="btn home">Home</div>
                <div class="btn item">Item</div>
                <div class="btn order">Order</div>
                <div class="btn history">History</div>
            </div>
        </div>

        <div class="contents">
            <?php
                require "home.php";
            ?>
        </div>
    </div>
</body>
</html>