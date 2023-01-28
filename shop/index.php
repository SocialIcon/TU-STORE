<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TU STORE</title>
    <style>
        <?php 
            include "../style/custom.css"; 
            include "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";
            /*...*/
        ?>
    </style>
</head>
<body>

    <div class="search-bar">
        <form action="" method="post">
            <input type="search" placeholder="Item Name / Price" autofocus>
            <input type="submit" value="Search">
        </form>
    </div>

    <div class="shop-list">
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
        <br>
        <?php require "shop-list.php"; ?>
    </div>

    <?php require "../menu-btn/index.php"; ?>

    <script src="https://kit.fontawesome.com/83a479628d.js" crossorigin="anonymous"></script>
    <script src="../js/script-related-style.js"></script>

</body>
</html>