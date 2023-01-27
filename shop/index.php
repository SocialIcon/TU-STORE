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

    <div class="btn-bar">
        <div class="round feedback-btn" id="feedbackBtn">
            <i class="fa-brands fa-product-hunt"></i>
        </div><hr>
        <div class="round">2</div><hr>
        <div class="round shop-btn" id="shopBtn">
            <i class="fa-solid fa-shop"></i>
        </div><hr>
        <div class="round">4</div><hr>
        <div class="round usr-btn" id="userAccountBtn">
            <i class="fas fa-user"></i>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/83a479628d.js" crossorigin="anonymous"></script>
    <script src="../js/script-related-style.js"></script>

    <script>
        // setTimeout(() => {
        //     window.open("auth/signIn","_self")
        // }, 3000);

        let feedbackBtn = document.getElementById("feedbackBtn");
        let shopBtn = document.getElementById("shopBtn");
        
        feedbackBtn.addEventListener("click",() => {
            window.open("../feedback/","_self");
        });
    </script>
</body>
</html>